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

           // Get the authenticated user
           $user = Auth::user();

           // Store user data in session
           Session::put('username', $user->username);
           Session::put('user_id', $user->id); // Store user ID in session

            return redirect()->intended('/home');
        }

        return back()->withErrors(['loginError' => 'Invalid credentials']);
    }

    // public function login(Request $request)
    // {

    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $user = User::where('username', $request->input('username'))->get()->first();

    //     if (is_null($user)) {
    //         $error = "Invalid username";
    //         $data = compact('error');
    //         echo $error;
    //         return view('auth.login')->with($data);
    //     }

    //     if (Hash::check($request->input('password'), $user->password)) {
    //         $request->Session()->put('user', $user->name);
    //         $request->Session()->put('userid', $user->id);

    //         return redirect(route('home'));

    //     } else {
    //         $error = "Invalid password";
    //         $data = compact('error');
    //         echo $error;
    //         return view('auth.login')->with($data);
    //     }
    // }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // For added security

        return redirect('login');
    }

    public function home()
    {
        return view('/home');
    }
}
