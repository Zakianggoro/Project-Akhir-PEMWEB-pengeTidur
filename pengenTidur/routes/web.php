<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthenticationController;


Route::get('/',[AuthenticationController::class,'showloginform']);
Route::post('/',[AuthenticationController::class,'login'])->name('login');
Route::get('/signup',[AuthenticationController::class,'showsignupform']);
Route::post('/signup',[AuthenticationController::class,'signup'])->name('signup');
Route::get('/wallet', function () {
    return view('wallet');
});
Route::middleware(['auth'])->group(function(){
    
});
