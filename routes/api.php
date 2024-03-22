<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FundraisingController;

// Route::get('/user', function (Request $request) {
//     return $request->user()->name('login');
// })->middleware('auth:sanctum');
Route::get('/fundraisings', [FundraisingController::class, 'index'])->name('fundraising.index');
Route::get('/fundraisings/:slug', [FundraisingController::class, 'index'])->name('fundraising.index.show');
