<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Siswa;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index() {
        return view('web.course.index', [
            'title' => 'Course'
        ]);
    }

    

    
}
