<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhatsAppCheckController;

Route::view('/', 'home')->name('home');

// Profile page route
Route::view('/profile', 'profile')->name('profile');

// Registration routes
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

// Login routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

// Logout route
Route::post('/logout', [UserController::class, 'logout'])->name('logout');



Route::get('/check-whatsapp', [WhatsAppCheckController::class, 'check']);

