<?php

namespace App\Http\Controllers;

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
}
