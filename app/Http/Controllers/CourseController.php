<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function getCourseStudent(){
        try{
            $userId = Auth::user()->id;
            $studentId  = Siswa::where('user_id' , $userId)->first()->id;

        }catch(Exception $e){

        }

    }
}
