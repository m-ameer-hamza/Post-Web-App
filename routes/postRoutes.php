<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::resource('posts', PostController::class)->middleware('auth');
