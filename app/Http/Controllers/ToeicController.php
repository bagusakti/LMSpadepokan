<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Toeic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ToeicController extends Controller
{
    public function index() {
        return view('trainer.datacourse.toeic.index', [
            'title' => 'Data TOEIC',
            'toeics' => Toeic::all()
        ]);
    }

    public function addToeic() {
        return view('trainer.datacourse.toeic.create', [
            'title' => 'Tambahkan TOEIC',
            'toeics' => Toeic::all()
        ]);
    }

    public function create(Request $request) {
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

    public function destroy($id) {
        $toeic = Toeic::find($id);
        $toeic->delete();
        return back();
    }

    public function submit(Request $request) {
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
