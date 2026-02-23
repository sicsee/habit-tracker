<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HabitController;
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
    Route::post('/logout',[LoginController::class, 'logout'])->name('auth.logout');

    // Habits
    Route::resource('/dashboard/habits', HabitController::class)->except('show');
    Route::get('/dashboard/habits/historico', [HabitController::class,'history'])->name('habits.history');
    Route::get('/dashboard/habits/configurar', [HabitController::class,'settings'])->name('habits.settings');
    Route::post('/dashboard/habits/{habit}/toggle', [HabitController::class,'toggle'])->name('habits.toggle');
});

