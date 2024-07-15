<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('layouts.main');
});

// Dashboard admin
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/registrasi', [RegisterController::class, 'index']);

// Login Admin
Route::get('/login-admin', [LoginController::class, 'index']);