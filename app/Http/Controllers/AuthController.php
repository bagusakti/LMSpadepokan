<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function register() {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function dologin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $role = Auth::user()->getRoleNames();
            $request->session()->regenerate();

            if ($role[0] == 'admin') {
                return redirect()->route('dashboard_admin');
            } elseif($role[0] == 'trainer') {
                return redirect()->route('dashboard_trainer');
            } elseif($role[0] == 'siswa') {
                return redirect()->route('dashboard_siswa');
            }
        }
        return back()->withErrors([
            'error' => 'Data yang anda masukkan tidak valid.',
        ])->onlyInput('error');
    }

    public function doregister(Request $request) {
        
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'institusi' => 'required',
            'whatsapp' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);
        if ($request->password_confirmation != $request->password) {
            return back()->withErrors([
                'password' => 'Password Salah',
            ])->onlyInput('password');
        }
        if (User::where('email', $credentials['email'])->exists()) {
            return back()->withErrors([
                'email' => 'Email sudah terdaftar. Silahkan gunakan Email lain',
            ])->onlyInput('email');
        }
        if (User::where('whatsapp', $credentials['whatsapp'])->exists()) {
            return back()->withErrors([
                'email' => 'Nomor Whatsapp sudah terdaftar. Silahkan gunakan Nomor lain',
            ])->onlyInput('whatsapp');
        }
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'institusi' => $request->institusi,
            'whatsapp' => $request->whatsapp,
            'password' => Hash::make($request->password)
        ]);

        Siswa::create([
            'name' => $request->name,
            'email' => $request->email,
            'institusi' => $request->institusi,
            'whatsapp' => $request->whatsapp,
        ]);
        // dd($user->all());

        if (Auth::attempt(['password' => $request->password, 'email' => $user->email])) {
            $user->assignRole('siswa');
            $request->session()->regenerate();
            return redirect()->route('login_page');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
