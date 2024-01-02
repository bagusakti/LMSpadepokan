<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class FillPDFController extends Controller
{
    public function process(Request $request)
    {
        $nama = $request->input('nama'); // Ganti 'post' menjadi 'input' dan sesuaikan dengan nama input form
        $outputfile = public_path() . '/dcc.pdf';
        $this->fillPDF(public_path() . '/master/dcc.pdf', $outputfile, $nama);

        return response()->file($outputfile);
    }

    public function fillPDF($file, $outputfile, $nama)
{
    $fpdi = new Fpdi;
    $fpdi->setSourceFile($file);
    $template = $fpdi->importPage(1);
    $size = $fpdi->getTemplateSize($template);
    $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
    $fpdi->useTemplate($template);
    
    // Hitung lebar teks
    $fpdi->SetFont("helvetica", "B", 27);
    $name = $nama;
    $textWidth = $fpdi->GetStringWidth($name);

    // Tentukan posisi tengah
    $pageWidth = $size['width'];
    $middleX = ($pageWidth - $textWidth) / 2;
    $top = 120;

    // Tampilkan teks di tengah
    $fpdi->SetTextColor(25, 26, 25);
    $fpdi->Text($middleX, $top, $name);

    $fpdi->Output($outputfile, 'F');
}

}
