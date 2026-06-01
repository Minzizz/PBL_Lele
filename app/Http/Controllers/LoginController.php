<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            $user = Auth::user();

            if ($user->id == 3) {
                return redirect('/admin');
            }

            if ($user->id == 4) {
                return redirect('/petugas');
            }

            if ($user->id == 5) {
                return redirect('/akuntan');
            }

            return redirect('/');
        }

        return back()->with('error', 'Email atau Password salah');
    }
}