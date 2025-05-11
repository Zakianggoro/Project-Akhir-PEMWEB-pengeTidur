<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function showloginform()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/wallet');
        }
        return back()->withErrors([
            'username' => 'Username atau password salah'
        ]);
    }
    
    public function showsignupform()
    {
        return view('signup');
    }
    public function signup(Request $request)
    {
        $request->validate([
        'name' => 'required|string|unique:users|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed'
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    return redirect()->route('login')->with('success','Registrasi berhasil');

    }

}
