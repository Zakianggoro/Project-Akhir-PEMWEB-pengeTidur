<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function view(){
        $user = Auth::user();
        $saldo = $user->totSaldo;
        $email = $user->email;
        

        return view('profile',compact('saldo','email'));
    }
}
