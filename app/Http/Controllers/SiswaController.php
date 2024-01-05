<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Siswa;
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
        $siswa = Auth::user();
        return view('siswa.course.pelatihanliterasi.index', [
            'siswa' => $siswa,
            'title' => 'Pelatihan Literasi',
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
            'judul' => 'required',
            'link_gbook' => 'required|url',
            'link_blog' => 'required|url',
        ]);

        Tugas::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'link_gbook' => $request->link_gbook,
            'link_blog' => $request->link_blog,
        ]);

        return back()->with('success', 'Tugas Berhasil Dikumpulkan');

    }

}
