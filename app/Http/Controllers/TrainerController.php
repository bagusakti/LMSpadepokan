<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrainerController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('trainer.dashboard.index', [
            'users' => $user,
            'title' => 'Dashboard Trainer'
        ]);
    }

    public function absensi() {
        $siswa = Auth::user();
        return view('trainer.absensiswa.index',[
            'users' => $siswa,
            'title' => 'Absensi Siswa'
        ]);
    }

    public function data() {
        $siswa = Auth::user();
        $parasiswa = Siswa::all();
        return view('trainer.datasiswa.index',[
            'users' => $siswa,
            'parasiswas' => $parasiswa,
            'title' => 'Data Siswa'
        ]);
    }

    public function statussiswa($siswaId) {
        
    //    $siswas = Siswa::find($siswaId);

    //     if($siswas) {
    //         if($siswas->status){
    //             $siswas->status = 0;
    //         }
    //         else{
    //             $siswas->status = 1;
    //         }
    //         $siswas->save();
    //     }   
    //         return back();
    // }
    DB::transaction(function () use ($siswaId) {
        $siswas = Siswa::find($siswaId);
        $user = User::find($siswas->user_id);

        if($siswas && $user) { 
            $newStatus = $siswas->status ? 0 : 1;

            $siswas->status = $newStatus;
            $user->status = $newStatus;

            $siswas->save();
            $user->save();
        }});
             return back()->with('success', 'status siswa berhasil diperbarui');
    }
}
