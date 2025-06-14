<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transfer;
use Illuminate\Support\Facades\DB;
class TransferController extends Controller
{
        public function view(){
        $user = Auth::user();
        $saldo = $user->saldo;

        return view('transfer',compact('saldo'));
    }
    public function send(Request $request){
    $user = Auth::user();
    $nominal = $request->nominal;

    if ($user->saldo < $nominal) {
        return response()->json(['error' => 'Saldo tidak cukup'], 400);
    }

    $user->saldo -= $nominal;
    $user->save();

    Transfer::create([
        'user_id' => $user->id,
        'tujuan' => $request->tujuan,
        'nominal' => $nominal,
        'date' => now()
    ]);

    return response()->json(['message' => 'Transfer berhasil!']);
    }
}
