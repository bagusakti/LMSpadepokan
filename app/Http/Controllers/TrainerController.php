<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainerController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('trainer.dashboard.index', [
            'users' => $user,
            'title' => 'Dashboard Trainer'
        ]);
    }

    public function absensi() {
        $siswa = Auth::user();
        return view('trainer.absensiswa.index',[
            'users' => $siswa,
            'title' => 'Absensi Siswa'
        ]);
    }

    public function data() {
        $siswa = Auth::user();
        $parasiswa = Siswa::all();
        return view('trainer.datasiswa.index',[
            'users' => $siswa,
            'parasiswas' => $parasiswa,
            'title' => 'Data Siswa'
        ]);
    }

    // public function statussiswa() {
    //     $siswa
    // }
}
