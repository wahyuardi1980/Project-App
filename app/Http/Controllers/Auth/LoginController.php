<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user_loginModel;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login_proses(Request $request)
    {
        // dd($request->all());

        Session::flash('email', $request->email);

        // Validasi input
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Proses otentikasi
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect('admin')->with('success', 'Berhasil login!');
        }else{
            return redirect()->route('login')->with('failed', 'Username atau password anda salah!');
        }
    }

    // Prosess Logout 

    public function logout(Request $request)
    {
        Auth::logout(); // Menghapus autentikasi pengguna
        $request->session()->invalidate(); // Me-reset sesi
        $request->session()->regenerateToken(); // Menghasilkan token sesi yang baru

        return redirect('/login')->with('warning', 'logged out!');
    }
}
