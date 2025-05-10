<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[loginController::class,'index']);
