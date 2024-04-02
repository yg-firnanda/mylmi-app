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

Route::get('/fundraisings', [FundraisingController::class, 'index'])->name('api.fundraising.index');
Route::get('/fundraisings/{fundraising:slug}', [FundraisingController::class, 'show'])->name('api.fundraising.show');

Route::get('/magazines', [MagazineController::class, 'index'])->name('api.magazine.index');
Route::get('/magazines/{magazines:slug}', [MagazineController::class, 'show'])->name('api.magazine.show');

Route::middleware('auth:sanctum')->group(function() {

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
