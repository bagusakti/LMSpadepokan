<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Literasi;
use App\Models\Toeic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index_literasi() {
        return view('trainer.datacourse.literasi.index', [
            'title' => 'Data Literasi'

        ]);
    }

    public function index_toeic() {
        return view('trainer.datacourse.toeic.index', [
            'title' => 'Data TOEIC',
            'toeics' => Toeic::all()
        ]);
    }

    public function add_toeic() {
        return view('trainer.datacourse.toeic.create', [
            'title' => 'Tambahkan TOEIC',
            'toeics' => Toeic::all()
        ]);
    }


    public function create_toeic(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $toeic = Toeic::create([
            'user_id' => auth()->id(),
            'title' => $request->title
        ]);

        return redirect()->route('trainer_course_toeic');

    }

    public function destroy_toeic($id) {
        $toeic = Toeic::find($id);
        $toeic->delete();
        return back();
    }

    public function submit_literasi(Request $request) {
        $request->validate([
            'judul' => 'required',
            'link_gbook' => 'required|url',
            'link_blog' => 'required|url',
        ]);
        Toeic::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'link_gbook' => $request->link_gbook,
            'link_blog' => $request->link_blog,
        ]);
        return back();
    }

    public function submit_toeic(Request $request) {
        $request->validate([
            'title' => 'required',
            'nilai' => 'required',
        ]);
        Toeic::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'nilai' => $request->nilai,
        ]);
        return back();
    }

}
