<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/profile', [UserController::class, 'index']);

Route::post('/post', [PostController::class, 'store'])->name('post.create');

Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/post/{post}', [PostController::class, 'view'])->name('post.view'); // Viewing post
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit'); // Editing post
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update'); // Updating post


