<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;

class VerifikasiController extends Controller
{
    public function showForm()
    {
        return view('verifikasi.form');
    }

    public function verifikasiSertifikat(Request $request)
    {
        $this->validate($request, [
            'id_siswa' => 'required',
            'nomor_sertifikat' => 'required',
        ]);

        $idSiswa = $request->input('id_siswa');
        $nomorSertifikat = $request->input('nomor_sertifikat');

        // Lakukan verifikasi sertifikat menggunakan model Tugas
        $tugas = Tugas::where('user_id', $idSiswa)
            ->where('judul', $nomorSertifikat)
            ->first();

        if ($tugas) {
            // Sertifikat valid, tampilkan informasi atau berhasil
            return view('verifikasi.hasil', ['tugas' => $tugas]);
        } else {
            // Sertifikat tidak valid, tampilkan pesan kesalahan
            return view('verifikasi.hasil', ['error' => 'Sertifikat tidak ditemukan.']);
        }
    }
}