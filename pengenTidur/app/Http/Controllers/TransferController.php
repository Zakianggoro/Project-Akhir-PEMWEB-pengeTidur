<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TransferController extends Controller
{
        public function view(){
        $user = Auth::user();
        $saldo = $user->saldo;

        return view('transfer',compact('saldo'));
    }
}
