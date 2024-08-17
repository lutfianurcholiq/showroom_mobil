<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

// Dashboard admin
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/registrasi', [RegisterController::class, 'index']);

// Login Admin
Route::get('/login-admin', [LoginController::class, 'index']);

// Jenis Mobil
Route::resource('/jenis-mobil', JenisController::class);

// Mobil
Route::resource('/mobil', MobilController::class);

// Profile
Route::get('/profile', [UsersController::class, 'profile']);