<?php

use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'dashboard']);
    Route::get('/requests', [DashBoardController::class, 'requests']);
    Route::patch('/accountRequest', [DashBoardController::class, 'accountRequest']);
    Route::resource('posts', AdminPostController::class);
    Route::resource('users', AdminUserController::class);
});
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'show');
    Route::post('/register', 'store');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'show')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('posts', PostController::class);

});
Route::fallback([ErrorController::class, 'show']);
