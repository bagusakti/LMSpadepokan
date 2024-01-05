<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Auth;

class FillPDFController2 extends Controller
{
    private static $qrCodePath;

    public function process()
    {
        $penerimaNama = Auth::user()->name;
        $judul = "Judul";
        $linkBlog = "https://ecertificate.seameo.org";
        $linkGBook = "https://g-book.com";
        self::$qrCodePath = public_path() . '/qrcode.png';
        $outputfile = public_path() . '/Sertifikat.pdf';
        $pdfFile1 = public_path() . '/master/Halaman1.pdf';
        $pdfFile2 = public_path() . '/master/Halaman2.pdf';

        // Check if the PDF files exist
        if (!file_exists($pdfFile1) || !file_exists($pdfFile2)) {
            return response()->json(['error' => 'PDF file not found'], 404);
        }

        // Initialize PDF
        $fpdi = new Fpdi;

        // Generate Sertifikat1
        $this->fillPDF($fpdi, $pdfFile1, $penerimaNama);

        // Add a new page for Sertifikat2
        $fpdi->AddPage();

        // Generate Sertifikat2
        $this->fillPDFWithLink($fpdi, $pdfFile2, $judul, $linkBlog, $linkGBook);

        // Output combined PDF
        $fpdi->Output($outputfile, 'F');

        return response()->file($outputfile);
    }

    public function fillPDF($fpdi, $file, $penerimaNama)
    {
        // Check if the PDF file exists
        if (!$fpdi->setSourceFile($file)) {
            die("Error: Could not open PDF file");
        }

        // Import the first page
        $template = $fpdi->importPage(1);

        // Add a new page
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));

        // Use the imported page
        $fpdi->useTemplate($template);

        // Calculate text width for penerimaNama
        $fpdi->SetFont("helvetica", "B", 40);
        $textWidthPenerima = $fpdi->GetStringWidth($penerimaNama);

        // Determine middle position for penerimaNama
        $pageWidth = $size['width'];
        $middleXPenerima = ($pageWidth - $textWidthPenerima) / 2;
        $topPenerima = ($size['height'] - 15) / 2;

        // Display penerimaNama in the middle
        $fpdi->SetTextColor(25, 26, 25);
        $fpdi->Text($middleXPenerima, $topPenerima, $penerimaNama);

        // Additional text
        $additionalText = Auth::user()->institusi;
        $fpdi->SetFont("helvetica", "", 16);
        $textWidthAdditional = $fpdi->GetStringWidth($additionalText);

        // Determine position for additional text (centered beneath penerimaNama)
        $middleXAdditionalText = $middleXPenerima + 103 ; // Menggunakan middleXPenerima sebagai referensi
        $middleYAdditionalText = $topPenerima + 10; // Sesuaikan nilai ini sesuai kebutuhan

        // Display additional text
        $fpdi->Text($middleXAdditionalText - ($textWidthAdditional / 2), $middleYAdditionalText, $additionalText);

        // Generate QR code as PNG for verification
        $verificationInfo = "Verification Info for Sertifikat: $penerimaNama";
        $qrCodeSize = 40;
        $this->generateQrCode($verificationInfo, self::$qrCodePath, $qrCodeSize);

        // Insert QR code into PDF
        $this->insertQrCode($fpdi, self::$qrCodePath, $size['height'], $qrCodeSize);
    }

    public function fillPDFWithLink($fpdi, $file, $judul, $linkBlog, $linkGBook)
    {
        // Check if the PDF file exists
        if (!$fpdi->setSourceFile($file)) {
            die("Error: Could not open PDF file");
        }

        // Import the first page
        $template = $fpdi->importPage(1);

        // Add a new page
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));

        // Use the imported page
        $fpdi->useTemplate($template);

        // Calculate text width for judul
        $fpdi->SetFont("helvetica", "B", 22);
        $textWidthJudul = $fpdi->GetStringWidth($judul);

        // Calculate text width for linkBlog
        $fpdi->SetFont("helvetica", "B", 22);
        $textWidthLinkBlog = $fpdi->GetStringWidth($linkBlog);

        // Calculate text width for linkGBook
        $fpdi->SetFont("helvetica", "B", 22);
        $textWidthLinkGBook = $fpdi->GetStringWidth($linkGBook);

        // Manual positioning for judul
        $middleXJudul = 130; // Posisi ke kanan lebih
        $topJudul = 87;

        // Manual positioning for linkBlog
        $middleXLinkBlog = 130; // Posisi ke kanan lebih
        $topLinkBlog = $size['height'] - 110;

        // Manual positioning for linkGBook
        $middleXLinkGBook = 130; // Posisi ke kanan lebih
        $topLinkGBook = $size['height'] - 96;

        // Display judul
        $fpdi->SetTextColor(25, 26, 25);
        $fpdi->Text($middleXJudul, $topJudul, $judul);

        // Display linkBlog
        $fpdi->Text($middleXLinkBlog, $topLinkBlog, $linkBlog);

        // Display linkGBook
        $fpdi->Text($middleXLinkGBook, $topLinkGBook, $linkGBook);

        // Generate QR code as PNG for verification
        $verificationInfo = "Verification Info for Sertifikat: $judul, $linkBlog, $linkGBook";
        $qrCodeSize = 40;
        $this->generateQrCode($verificationInfo, self::$qrCodePath, $qrCodeSize);

        // Insert QR code into PDF
        $this->insertQrCode($fpdi, self::$qrCodePath, $size['height'], $qrCodeSize);
    }

    private function generateQrCode(string $data, string $path, int $size)
    {
        $qrCode = new QrCode($data);
        $qrCode->setSize($size);
        $qrCode->setMargin(10);

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        // Save QR code to file
        file_put_contents($path, $result->getString());
    }

    private function insertQrCode($fpdi, $qrCodePath, $pageHeight, $qrCodeSize)
    {
        // Get the dimensions of the imported QR code image
        list($qrcodeWidth, $qrcodeHeight) = getimagesize($qrCodePath);

        // Calculate position for QR code (misalnya, di tengah halaman)
        $qrcodeX = 261;
        $qrcodeY = -4;

        // Insert QR code into PDF
        $fpdi->Image($qrCodePath, $qrcodeX, $qrcodeY, $qrCodeSize, 0, 'PNG');
    }
}
