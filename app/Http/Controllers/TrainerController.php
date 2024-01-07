<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Tugas;
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

    public function pelatihanliterasi() {
        $siswa = Auth::user();
        $parasiswa = Siswa::all();
        $paratugas = Tugas::with('user')->get();
        return view('trainer.datacourse.pelatihanliterasi.index',[
            'users' => $siswa,
            'parasiswas' => $parasiswa,
            'paratugas' => $paratugas,
            'title' => 'Pelatihan Literasi'
        ]);
    }

    public function statussiswa($siswaId) {
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
                return back()->with('success1', 'status siswa berhasil diperbarui');
    }

    public function resettugas($id) {
        $tugas = Tugas::find($id);
        $tugas->delete();
        return back()->with('success2', 'Tugas Berhasil Dihapus Dan Status Tugas Siswa Telah Direset.');
    }
}
