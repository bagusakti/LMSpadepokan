<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('web.home.index', [
            'title' => 'Home',
            'users' => $user
        ]);
    }

    public function literasi() {
        $pesertas = Siswa::all();
        return view('web.course.pelatihanliterasi.index', [
            'title' => 'Pelatihan Literasi',
            'pesertas' => $pesertas
        ]);
    }
}
