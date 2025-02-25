<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            Session::put('username', $request->username);
            return redirect()->intended('/home');
        }

        return back()->withErrors(['loginError' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
