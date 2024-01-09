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


    public function datasiswa() {
        $siswa = Auth::user();
        $parasiswa = Siswa::all();
        $paratugas = Tugas::with('user')->get();
        return view('trainer.datasiswa.index',[
            'users' => $siswa,
            'parasiswas' => $parasiswa,
            'paratugas' => $paratugas,
            'title' => 'Data Siswa'
        ]);
    }

    public function editsiswa($id) {
        $siswa = Siswa::find($id);
        $user = User::find($siswa->user_id);

        return view('trainer.datasiswa.edit', [
            'siswa' => $siswa,
            'user' => $user,
            'title' => 'Edit Siswa'
        ]);
    }

    public function updatesiswa(Request $request, $id)
{
    DB::transaction(function () use ($request, $id) {
        $siswa = Siswa::find($id);
        $user = User::find($siswa->user_id);

        // Update data user
        $user->name = $request->name;
        $user->email = $request->email;

        // Update data siswa
        $siswa->name = $request->name;
        $siswa->email = $request->email;
        $siswa->institusi = $request->institusi;
        $siswa->whatsapp = $request->whatsapp;

        $user->save();
        $siswa->save();
    });

    return redirect()->route('trainer_side_datasiswa')->with('success', 'Data berhasil diperbarui');
}

public function hapussiswa($id)
{
    DB::transaction(function () use ($id) {
        $siswa = Siswa::find($id);
        $user = User::find($siswa->user_id);

        $user->delete();
        $siswa->delete();
    });

    return back()->with('success', 'Data berhasil dihapus');
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
