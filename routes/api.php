<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MagazineController;
use App\Http\Controllers\API\FundraisingController;
use App\Http\Controllers\API\auth\LoginController;
use App\Http\Controllers\API\auth\RegisterController;

// Route::get('/user', function (Request $request) {
//     return $request->user()->name('login');
// })->middleware('auth:sanctum');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.register');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::post('/logout', [LoginController::class, 'logout'], 'logout')->name('auth.logout');
Route::get('/fundraisings', [FundraisingController::class, 'index'])->name('fundraising.index');
Route::get('/fundraisings/{fundraising:slug}', [FundraisingController::class, 'show'])->name('fundraising.show');
Route::get('/magazines', [MagazineController::class, 'index'])->name('magazine.index');
Route::get('/magazines/:slug', [MagazineController::class, 'index'])->name('magazine.show');
