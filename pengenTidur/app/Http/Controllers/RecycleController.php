<?php

namespace App\Http\Controllers;

use App\Models\Sampah;
use Illuminate\Http\Request;


class RecycleController extends Controller
{
    public function view(){
        $sampahlist = Sampah::all();

        return view('recycle',compact('sampahlist'));
    }

}
