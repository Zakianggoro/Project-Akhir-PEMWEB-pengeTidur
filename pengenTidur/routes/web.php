<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthenticationController;
use App\http\Controllers\TrashpediaController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
Route::get('/',[AuthenticationController::class,'showloginform']);
Route::post('/',[AuthenticationController::class,'login'])->name('login');
Route::get('/signup',[AuthenticationController::class,'showsignupform']);
Route::post('/signup',[AuthenticationController::class,'signup'])->name('signup');

Route::middleware(['auth'])->group(function(){
    
    Route::get('/home',[HomeController::class,'view'])->name('home');
    Route::get('/wallet',[WalletController::class,'view'])->name('wallet');
    Route::get('/profile',[ProfileController::class,'view'])->name('profile');
    Route::get('/transfer',[TransferController::class,'view'])->name('transfer');

    Route::get('/trashpedia',[TrashpediaController::class,'view'])->name('trashpedia');
});
