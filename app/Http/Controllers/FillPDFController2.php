<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Auth;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;

class FillPDFController2 extends Controller
{
    private static $qrCodePath;
    private $user;

    public function process()
    {
        $this->user = Auth::user();
        $tugas = $this->user->tugas->first();
        $penerimaNama = $this->user->name;
        $judul = $tugas->judul;
        $linkBlog = $tugas->link_blog;
        $linkGBook = $tugas->link_gbook;
        self::$qrCodePath = public_path() . "/qrcode_{$this->user->id}.png";
        $outputfile = public_path() . '/Sertifikat.pdf';
        $pdfFile1 = public_path() . '/master/Halaman1.pdf';
        $pdfFile2 = public_path() . '/master/Halaman2.pdf';

        if (!file_exists($pdfFile1) || !file_exists($pdfFile2)) {
            return response()->json(['error' => 'PDF file not found'], 404);
        }

        $fpdi = new Fpdi;

        $this->fillPDF($fpdi, $pdfFile1, $penerimaNama);

        $fpdi->AddPage();

        $this->fillPDFWithLink($fpdi, $pdfFile2, $judul, $linkBlog, $linkGBook);

        $fpdi->Output($outputfile, 'F');

        return response()->file($outputfile);
    }

    public function fillPDF($fpdi, $file, $penerimaNama)
    {
        if (!$fpdi->setSourceFile($file)) {
            die("Error: Could not open PDF file");
        }

        $template = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($template);

        $fpdi->SetFont("helvetica", "B", 40);
        $textWidthPenerima = $fpdi->GetStringWidth($penerimaNama);

        $pageWidth = $size['width'];
        $middleXPenerima = ($pageWidth - $textWidthPenerima) / 2;
        $topPenerima = ($size['height'] - 15) / 2;

        $fpdi->SetTextColor(25, 26, 25);
        $fpdi->Text($middleXPenerima, $topPenerima, $penerimaNama);

        $additionalText = $this->user->institusi;
        $fpdi->SetFont("helvetica", "", 16);

        $textWidthAdditional = $fpdi->GetStringWidth($additionalText);

        $middleXAdditionalText = $pageWidth / 2;
        $middleYAdditionalText = $topPenerima + 10;

        $fpdi->Text($middleXAdditionalText - ($textWidthAdditional / 2), $middleYAdditionalText, $additionalText);

        $verificationInfo = "Verification Info for Sertifikat: $penerimaNama&user_id={$this->user->id}";
        $qrCodeSize = 45;
        $this->generateQrCode($verificationInfo, self::$qrCodePath, $qrCodeSize);

        $this->insertQrCode($fpdi, self::$qrCodePath, $size['height'], $qrCodeSize);
    }

    public function fillPDFWithLink($fpdi, $file, $judul, $linkBlog, $linkGBook)
    {
        if (!$fpdi->setSourceFile($file)) {
            die("Error: Could not open PDF file");
        }

        $template = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($template);

        $fpdi->SetFont("helvetica", "B", 22);
        $textWidthJudul = $fpdi->GetStringWidth($judul);

        $fpdi->SetFont("helvetica", "B", 22);
        $textWidthLinkBlog = $fpdi->GetStringWidth($linkBlog);

        $fpdi->SetFont("helvetica", "B", 22);
        $textWidthLinkGBook = $fpdi->GetStringWidth($linkGBook);

        $middleXJudul = 130;
        $topJudul = 87;

        $middleXLinkBlog = 130;
        $topLinkBlog = $size['height'] - 110;

        $middleXLinkGBook = 130;
        $topLinkGBook = $size['height'] - 96;

        $fpdi->SetTextColor(25, 26, 25);
        $fpdi->Text($middleXJudul, $topJudul, $judul);

        $fpdi->Text($middleXLinkBlog, $topLinkBlog, $linkBlog);

        $fpdi->Text($middleXLinkGBook, $topLinkGBook, $linkGBook);

        $verificationInfo = "Verification Info for Sertifikat: $judul, $linkBlog, $linkGBook&user_id={$this->user->id}";
        $qrCodeSize = 45;
        $this->generateQrCode($verificationInfo, self::$qrCodePath, $qrCodeSize);

        $this->insertQrCode($fpdi, self::$qrCodePath, $size['height'], $qrCodeSize);
    }

    private function generateQrCode(string $data, string $path, int $size)
    {
        // Tambahkan variabel unik untuk memastikan hasil QR code berbeda-beda
        $uniqueKey = uniqid(); 
        $dataWithUniqueKey = $data . "&unique_key={$uniqueKey}";

        $qrCode = new QrCode($dataWithUniqueKey);
        $qrCode->setSize(50);
        $qrCode->setMargin(0);

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        file_put_contents($path, $result->getString());
    }

    private function insertQrCode($fpdi, $qrCodePath, $pageHeight, $qrCodeSize)
    {
        list($qrcodeWidth, $qrcodeHeight) = getimagesize($qrCodePath);

        $qrcodeX = 252;
        $qrcodeY = 1;

        $fpdi->Image($qrCodePath, $qrcodeX, $qrcodeY, $qrCodeSize, 0, 'PNG');
    }
}
