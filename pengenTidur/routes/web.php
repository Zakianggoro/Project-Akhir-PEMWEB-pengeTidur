<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthenticationController;


Route::get('/',[AuthenticationController::class,'showloginform']);
Route::post('/',[AuthenticationController::class,'login'])->name('login');
Route::get('/signup',[AuthenticationController::class,'showsignupform']);
Route::post('/signup',[AuthenticationController::class,'signup'])->name('signup');

Route::middleware(['auth'])->group(function(){
    Route::get('/wallet', function () {
        return view('wallet');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
      Route::get('/transfer', function () {
        return view('transfer');
    });
      Route::get('/trashpedia', function () {
        return view('trashpedia');
    });       
});
