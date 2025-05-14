<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function view(){
        $user = Auth::user();
        $saldo = $user->saldo;

        return view('home',compact('saldo'));
    }
}
