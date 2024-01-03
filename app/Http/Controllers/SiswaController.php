<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tugas;
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
            'title' => 'Dashboard Siswa'
        ]);
    }

    public function profil() {
        $siswa = Auth::user();
        return view('siswa.profilsiswa.index',[
            'siswa' => $siswa,
            'title' => 'Profil Saya'
        ]);
    }

    public function pelatihanliterasi() {
        return view('siswa.course.pelatihanliterasi.index', [
            'title' => 'Pelatihan Literasi'
        ]);
    }

    public function uplink(Request $request){
        $submission = Tugas::where('user_id', auth()->id())->first();

        if ($submission) {
            return back()->withErrors([
                'submission' => 'Anda sudah pernah mengumpulkan tugas ini.',
            ]);
        }

        $request->validate([
            'link_gbook' => 'required_without:link_blog|url',
            'link_blog' => 'required_without:link_gbook|url',
        ]);

        Tugas::create([
            'user_id' => auth()->id(),
            'link_gbook' => $request->link_gbook,
            'link_blog' => $request->link_blog,
        ]);

        return back()->with('success', 'Tugas Berhasil Dikumpulkan');

    }
}
