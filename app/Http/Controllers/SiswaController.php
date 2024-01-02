<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index() {
        $user = Auth::user();
        $courses = Course::all();
        return view('siswa.dashboard.index', [
            'users' => $user,
            'courses' => $courses,
            'title' => 'Dashboard Trainer'
        ]);
    }

    public function pelatihanliterasi() {
        return view('siswa.course.pelatihanliterasi.index', [
            'title' => 'Pelatihan Literasi'
        ]);
    }
}
