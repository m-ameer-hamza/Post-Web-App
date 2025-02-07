<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route for the home page (register view)
Route::view('/', 'register');

// Route for user logout
Route::post('/logout', [UserController::class, 'logout']);

// Route for user registration
Route::post('/register', [UserController::class, 'register']);

// Route for login page
Route::view('/login', 'login')->name('login');

// Route for user login
Route::post('/login', [UserController::class, 'login']);
