<?php

namespace App\Http\Controllers;

use App\Models\Course;
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


    public function datasiswa() {
        return view('trainer.datasiswa.index',[
            'users' => User::role('siswa')->get(),
            'title' => 'Data Siswa'
        ]);
    }

    public function editsiswa($id) {
        return view('trainer.datasiswa.edit', [
            'users' => User::findOrFail($id),
            'title' => 'Edit Siswa'
        ]);
    }

    public function updatesiswa(Request $request, $id)
    {
        $users = User::find($id);
        if($users) {
            $users->name = $request->name;
            $users->email = $request->email;
            $users->institusi = $request->institusi;
            $users->whatsapp = $request->whatsapp;
        }
        $users->save();
        return redirect()->route('trainer_side_datasiswa')->with('success', 'Data berhasil diperbarui');
    }

    public function hapussiswa($id)
    {
        $users = User::find($id);
        if($users) {
            $users->delete();
        }
        return back()->with('success', 'Data berhasil dihapus');
    }

    public function Literasi() {
        return view('trainer.course.literasi', [
            'siswa' => User::role('siswa')->get(),
            'tugas' => Tugas::with('user')->get()
        ]);
    }

    public function pelatihanliterasi() {
        $siswa = Auth::user();
        $paratugas = Tugas::with('user')->get();
        return view('trainer.datacourse.pelatihanliterasi.index',[
            'users' => $siswa,
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
