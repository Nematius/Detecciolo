<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nombre', 'contrasena');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            return redirect()->route('login')->withErrors(['error' => 'Nombre de usuario o contraseña incorrectos']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}