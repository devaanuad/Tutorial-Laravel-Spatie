<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'admin') {
                return redirect()->intended('admin/dashboard');
            } elseif (auth()->user()->role == 'petugas') {
                return redirect()->intended('petugas/dashboard');
            } elseif (auth()->user()->role == 'siswa') {
                return redirect()->intended('siswa/dashboard');
            }
        }

        return back()->with('alert-login', 'Email or password is incorrect');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index')->with('alert-logout', 'You are logged out');
    }
}
