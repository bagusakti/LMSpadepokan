<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
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
            $user = Auth::user();
            $request->session()->regenerate();
    
            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard_admin');
            } elseif($user->hasRole('trainer')) {
                return redirect()->route('dashboard_trainer');
            } elseif($user->hasRole('siswa')) {
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
            'email' => 'required|unique:users',
            'institusi' => 'required',
            'whatsapp' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
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
                'whatsapp' => 'Nomor Whatsapp sudah terdaftar. Silahkan gunakan Nomor lain',
            ])->onlyInput('whatsapp');
        }
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'institusi' => $request->institusi,
            'whatsapp' => $request->whatsapp,
            'password' => Hash::make($request->password)
        ]);
        // dd($user);

        if (Auth::attempt(['password' => $request->password, 'email' => $user->email])) {
            $user->assignRole('siswa');
            $request->session()->regenerate();
            return redirect()->route('login_page')->with('email', $user->email)->with('success', 'Akun Berhasil Didaftarkan, Silahkan Login');
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
