<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FundraisingController;
use App\Http\Controllers\API\MagazineController;

// Route::get('/user', function (Request $request) {
//     return $request->user()->name('login');
// })->middleware('auth:sanctum');
Route::get('/fundraisings', [FundraisingController::class, 'index'])->name('fundraising.index');
Route::get('/fundraisings/:slug', [FundraisingController::class, 'index'])->name('fundraising.index.show');
Route::get('/magazines', [MagazineController::class, 'index'])->name('magazine.index');
Route::get('/magazines/:slug', [MagazineController::class, 'index'])->name('magazine.index.show');
