<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller

    {
        public function index() {
            return view('admin.dashboard.index', [
                'title' => 'Dashboard Admin'
            ]);
        }

        public function course() {
            $courses = Course::All();
            return view('admin.datacourse.index', [
                'title' => 'Data Course',
                'courses' => $courses
            ]);
        }

        public function addcourse() {
            $courses = Course::All();
            return view('admin.datacourse.create', [
                'title' => 'Tambahkan Course',
                'courses' => $courses
            ]);
        }

        public function storecourse(Request $request) {
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "category" => "required",
                "image" => "required|image|mimes:svg",
                "d1" => "required",
                "d2" => "required",
                "p1" => "required",
                "p2" => "required",
                "p3" => "required",
                "dp1" => "required",
                "dp2" => "required",
                "dp3" => "required",
            ]);
        
            if ($validator->fails()) {
                return redirect('admin_store_course')
                            ->withErrors($validator)
                            ->withInput();
            }

            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/program/', $fileName);

            $course = Course::create([
                'name' => $request->name,
                'category' => $request->category,
                'image' => $fileName,
                'd1' => $request->d1,
                'd2' => $request->d2,
                'p1' => $request->p1,
                'p2' => $request->p2,
                'p3' => $request->p3,
                'dp1' => $request->dp1,
                'dp2' => $request->dp2,
                'dp3' => $request->dp3,
            ]);

            // @dd($course);
            return redirect()->route('admin_side_course');
        }

        public function addcourse_users(Request $request) {
            $users = User::find($request->users_id);
            $courses = Course::find($request->course_id);

            if ($users && $courses) {
                $users->courses()->attach($courses);
                return back()->with('success', 'Course berhasil ditambahkan ke siswa');
            } else {
                return back()->with('error', 'Siswa atau Course tidak ditemukan');
            }
        }

    }
    

