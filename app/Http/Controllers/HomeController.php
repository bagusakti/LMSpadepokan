<?php

namespace App\Http\Controllers;

use App\Models\CATC;
use App\Models\Course;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $user = Auth::user();
        $courses = Course::all();
        return view('web.home.index', [
            'title' => 'Home',
            'users' => $user,
            'courses' => $courses
        ]);
    }

    public function detailcourse($id) {
        $courseName = Course::where('name');
        $users = User::where('course_id', $courseName);
        $courses = Course::findOrFail($id);

        return view('web.course.detailcourse.index', [
            'title' => 'Detail Course',
            'courses' => $courses,
            'users' => $users,
        ]);
    }

    public function index_catc() {
        return view('web.catc.index', [
            'catc' => CATC::all(),
            'title' => 'Unduh Sertifikat CATC',
            'users' => Auth::user()
        ]);
    }

    public function search_catc(Request $request) { 
        $search = $request->get('search');
        $results = CATC::all()->where('nama', 'like', '%', $search, '%')->orWhere('sekolah', 'like', '%', $search, '%');
        return view('web.catc.index', [
            'catc' => $results,
            'title' => 'Unduh Sertifikat CATC',
            'users' => Auth::user()
        ]);
    }
    
    
}