<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostCategoryController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/products', [PostController::class, 'index'])->name('posts.index');
Route::get('/{posts:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/categories', [PostCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{categories:slug}', [PostCategoryController::class, 'show'])->name('categories.show');

Auth::routes(['register'=>false]);

// Route::middleware(['auth'])->group(function () {
//     Route::get('user',[UserController::class,'index'])->name('user.index');
//     Route::post('user',[UserController::class,'store'])->name('user.store');
//     Route::put('user/{id}',[UserController::class,'update'])->name('user.update');
//     Route::delete('user/{id}',[UserController::class,'destroy'])->name('user.destroy');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

