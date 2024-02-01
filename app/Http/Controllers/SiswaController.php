<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Literasi;
use App\Models\Siswa;
use App\Models\Toeic;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index() {
        return view('siswa.dashboard.index', [
            'title' => 'Dashboard Siswa',
            'user' => User::auth()
        ]);
    }

    public function profil() {
        return view('siswa.profilsiswa.index',[
            'title' => 'Dash. Siswa | Profil Saya',
            'siswa' => Auth::user()
        ]);
    }

    public function literasi() {
        return view('siswa.course.literasi.index', [
            'title' => 'Dash. Siswa | Toeic Test',
            'toeic' => Literasi::all(),
            'user' => User::auth()
        ]);
    }

    public function toeic() {
        return view('siswa.course.toeic.index', [
            'title' => 'Dash. Siswa | Toeic Test',
            'toeic' => Toeic::all(),
            'user' => User::auth()
        ]);
    }

    

}
