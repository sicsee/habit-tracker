<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use \App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Site
Route::get('/', [SiteController::class, 'index'])->name('site.index');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('site.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.register');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('/login',  [LoginController::class, 'authenticate'])->name('auth.login');

// AUTH
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard',[SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout',[LoginController::class, 'logout'])->name('auth.logout');
});

