<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/fundraisings', [FundraisingController::class, 'index'])->name('fundraising.index');
Route::get('/fundraisings/:slug', [FundraisingController::class, 'index'])->name('fundraising.index.show');
