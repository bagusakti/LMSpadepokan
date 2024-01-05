<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Auth;
use App\Models\Tugas; 

class FillPDFController2 extends Controller
{
    private $user;

    public function process()
    {
        $this->user = Auth::user();
        $tugas = $this->user->tugas->first();

        if (!$tugas) {
            return response()->json(['error' => 'Tugas not found for the user'], 404);
        }

        $nomorSertifikat = '12345'; // Gantilah dengan nomor sertifikat yang sesuai

        $penerimaNama = $this->user->name;
        $judul = $tugas->judul;
        $linkBlog = $tugas->link_blog;
        $linkGBook = $tugas->link_gbook;
        $outputfile = public_path() .'/Sertifikat.pdf';
        $pdfFile1 = public_path() . '/master/Halaman1.pdf';
        $pdfFile2 = public_path() . '/master/Halaman2.pdf';

        if (!file_exists($pdfFile1) || !file_exists($pdfFile2)) {
            return response()->json(['error' => 'PDF file not found'], 404);
        }

        $fpdi = new Fpdi;

        $this->fillPDF($fpdi, $pdfFile1, $penerimaNama, $nomorSertifikat);

        // Cek apakah ada tugas sebelum menambahkan halaman kedua
        if ($tugas) {
            $fpdi->AddPage();
            $this->fillPDFWithLink($fpdi, $pdfFile2, $judul, $linkBlog, $linkGBook, $nomorSertifikat);
        }

        $fpdi->Output($outputfile, 'F');

        return response()->file($outputfile);
    }

    public function fillPDF($fpdi, $file, $penerimaNama, $nomorSertifikat)
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

        $additionalText =  $this->user->institusi;
        $fpdi->SetFont("helvetica", "", 16);

        $textWidthAdditional = $fpdi->GetStringWidth($additionalText);

        $middleXAdditionalText = $pageWidth / 2;
        $middleYAdditionalText = $topPenerima + 10;

        $fpdi->Text($middleXAdditionalText - ($textWidthAdditional / 2), $middleYAdditionalText, $additionalText);

        $fpdi->SetFont("helvetica", "", 12);
        $fpdi->SetXY(50, 100);
        $fpdi->Cell(0, 10, "Nomor Sertifikat: $nomorSertifikat", 0, 1, 'L');
    }

    public function fillPDFWithLink($fpdi, $file, $judul, $linkBlog, $linkGBook, $nomorSertifikat)
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

        $fpdi->SetFont("helvetica", "", 12);
        $fpdi->SetXY(50, 100);
        $fpdi->Cell(0, 10, "Nomor Sertifikat: $nomorSertifikat", 0, 1, 'L');
    }
}
