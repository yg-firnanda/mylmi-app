<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

Route::middleware(['auth'])->group(function () {
    Route::get('user',[UserController::class,'index'])->name('user.index');
    Route::post('user',[UserController::class,'store'])->name('user.store');
    Route::put('user/{id}',[UserController::class,'update'])->name('user.update');
    Route::delete('user/{id}',[UserController::class,'destroy'])->name('user.destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

