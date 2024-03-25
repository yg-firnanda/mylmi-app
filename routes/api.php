<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\MagazineController;
use App\Http\Controllers\API\FundraisingController;


// Route::get('/user', function (Request $request) {
//     return $request->user()->name('login');
// })->middleware('auth:sanctum');
// Auth Routes 
Route::post('/register', [AuthController::class, 'store'])->name('auth.register');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/fundraisings', [FundraisingController::class, 'index'])->name('fundraising.index');
    Route::get('/fundraisings/{fundraising:slug}', [FundraisingController::class, 'show'])->name('fundraising.show');
    Route::get('/magazines', [MagazineController::class, 'index'])->name('magazine.index');
    Route::get('/magazines/:slug', [MagazineController::class, 'index'])->name('magazine.show');

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
