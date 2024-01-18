<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Contracts\Role;

class AdminController extends Controller

    {
        public function index() {
            return view('admin.dashboard.index', [
                'title' => 'Dashboard Admin',
                'courses' => Course::all()
            ]);
        }

        public function datatrainer() {
            $trainers = User::role('trainer')->get();
            return view('admin.datatrainer.index', [
                'title' => 'Dash. Admin | Data Trainers',
                'trainers' => $trainers,
                'courses' => Course::all()
            ]);
        }

        public function assignTrainer($id) {
            $user = User::find($id);
            if ($user) {
                $user->syncRoles('trainer');
            }
            return redirect()->back();
        }

        public function dropSiswa($id) {
            $user = User::find($id);
            if ($user) {
                $user->syncRoles('siswa');
            }
            return redirect()->back();
        }

        public function datasiswa() {
            $siswa = User::role('siswa')->get();
            return view('admin.datasiswa.index', [
                'title' => 'Dash. Admin | Data Siswa',
                'siswa' => $siswa,
                'courses' => Course::all()
            ]);
        }

        public function datauser() {
            $courseName = Course::where('name');
            return view('admin.datausers.index', [
                'title' => 'Dash. Admin | Data Users',
                'users' => User::all(),
                'courses' => Course::all(),
                'userByCourses' => User::where('course_id', $courseName )
            ]);
        }

        public function datacourseuser($id) {
            $users = User::all();
            $course = Course::findOrFail($id);
            $courses = Course::all();
            $dcourse = Course::find($id);
            return view('admin.datauser.index', [
                'title' => 'Dash. Admin | Data SiswabyCourse',
                'users' => $users,
                'course' => $course,
                'courses' => $courses,
                'dcourse' => $dcourse
            ]);
        }

        public function addCoursetoUser(Request $request) {
            $validator =Validator::make($request->all(), [
                'user_id' => 'required',
                'course_id' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_side_users')
                            ->withErrors($validator)
                            ->withInput();
            }

            $user = User::find($request->user_id);
            foreach ($request->course_id as $courseId) {
                $user->addcourses($courseId);
            }

            return redirect()->route('admin_side_users');
        }

            public function removeCourseFromUser(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'course_id' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin_side_users')
                            ->withErrors($validator)
                            ->withInput();
            }

            $user = User::find($request->user_id);
            if ($user) {
                foreach ($request->course_id as $courseId) {
                    $user->courses()->detach($courseId);
                }
            }

            return redirect()->route('admin_side_users');
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

        public function detailCourse($id) {
            $course = Course::find($id);
            $courses = Course::all();
            return view('admin.datacourse.detail', [
                'title' => 'Detail Course',
                'course' => $course,
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
                return redirect()->route('admin_store_course')
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

        public function editCourse($id) {
            $courses = Course::all();
            $course = Course::find($id);
            return view('admin.datacourse.edit',[
                'title' => 'Edit Course',
                'course' => $course,
                'courses' => $courses
            ]);
        }

        public function updateCourse(Request $request, $id)
        {
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
                return redirect()->route('admin_edit_course', ['id' => $id])
                            ->withErrors($validator)
                            ->withInput();
            }

            $course = Course::find($id);

            if ($course) {
                Storage::disk('public')->delete('program/' . $course->image);

                $fileName = time() . '.' . $request->image->extension();
                $request->image->storeAs('public/program/', $fileName);

                $course->update([
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

                return redirect()->route('admin_side_course');
            }
        }

        
        public function deleteCourse($id){
            $course = Course::find($id);

            if ($course) {
                Storage::disk('public')->delete('program/' . $course->image);
                $course->delete();
                return redirect()->route('admin_side_course');
            }
        }   


    }
    

