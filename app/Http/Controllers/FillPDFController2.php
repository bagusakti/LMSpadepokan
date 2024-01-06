<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Auth;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

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

        $pdf = new Fpdi;

        // Import PDF 1
        $pdf->setSourceFile($pdfFile1);
        $template1 = $pdf->importPage(1);
        $size1 = $pdf->getTemplateSize($template1);
        $pdf->AddPage($size1['orientation'], [$size1['width'], $size1['height']]);
        $pdf->useTemplate($template1);

        $this->fillPDF($pdf, $penerimaNama);

        // Import PDF 2
        $pdf->setSourceFile($pdfFile2);
        $template2 = $pdf->importPage(1);
        $size2 = $pdf->getTemplateSize($template2);
        $pdf->AddPage($size2['orientation'], [$size2['width'], $size2['height']]);
        $pdf->useTemplate($template2);

        $this->fillPDFWithLink($pdf, $judul, $linkBlog, $linkGBook);

        $pdf->Output($outputfile, 'F');

        return response()->file($outputfile);
    }

    public function fillPDF($pdf, $penerimaNama)
    {
        $pdf->SetFont("helvetica", "B", 40);
        $textWidthPenerima = $pdf->GetStringWidth($penerimaNama);

        $template = $pdf->importPage(1);
        $size = $pdf->getTemplateSize($template);

        $pageWidth = $size['width'];
        $pageHeight = $size['height'];
        $middleXPenerima = ($pageWidth - $textWidthPenerima) / 2;
        $topPenerima = ($pageHeight - 15) / 2;

        $pdf->SetTextColor(25, 26, 25);
        $pdf->Text($middleXPenerima, $topPenerima, $penerimaNama);

        // Tambahkan elemen-elemen lain sesuai kebutuhan Anda

        $verificationInfo = "Verification Info for Sertifikat: $penerimaNama&user_id={$this->user->id}";
        $qrCodeSize = 45;
        $this->generateQrCode($verificationInfo, self::$qrCodePath, $qrCodeSize);

        $this->insertQrCode($pdf, self::$qrCodePath, $pageHeight, $qrCodeSize);
    }

    public function fillPDFWithLink($pdf, $judul, $linkBlog, $linkGBook)
    {
        $pdf->SetFont("helvetica", "B", 22);
        $textWidthJudul = $pdf->GetStringWidth($judul);

        $template = $pdf->importPage(1);
        $size = $pdf->getTemplateSize($template);

        $pageWidth = $size['width'];
        $pageHeight = $size['height'];
        $middleXJudul = 130;
        $topJudul = 87;

        $pdf->SetTextColor(25, 26, 25);
        $pdf->Text($middleXJudul, $topJudul, $judul);

        // Tambahkan elemen-elemen lain sesuai kebutuhan Anda

        $verificationInfo = "Verification Info for Sertifikat: $judul, $linkBlog, $linkGBook&user_id={$this->user->id}";
        $qrCodeSize = 45;
        $this->generateQrCode($verificationInfo, self::$qrCodePath, $qrCodeSize);

        $this->insertQrCode($pdf, self::$qrCodePath, $pageHeight, $qrCodeSize);
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

    private function insertQrCode($pdf, $qrCodePath, $pageHeight, $qrCodeSize)
    {
        list($qrcodeWidth, $qrcodeHeight) = getimagesize($qrCodePath);

        $qrcodeX = 252;
        $qrcodeY = 1;

        $pdf->Image($qrCodePath, $qrcodeX, $qrcodeY, $qrCodeSize, 0, 'PNG');
    }
}
