<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->role == 'admin') {
            return redirect('/admin');
        }

        if ($user->role == 'petugas') {
            return redirect('/petugas');
        }

        if ($user->role == 'akuntan') {
            return redirect('/akuntan');
        }
        if ($user->role == 'user') {
            return redirect('/');
        }

        // fallback
        return redirect('/home');
    }

    return back()->withErrors([
        'email' => 'Login gagal',
    ]);
}
}