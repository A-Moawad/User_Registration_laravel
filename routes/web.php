<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Home or welcome page
Route::view('/', 'home')->name('home');

// Register page route
Route::view('/register', 'register')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Login page route
Route::view('/login', 'login')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Profile page route (make sure you have a profile.blade.php view)
Route::view('/profile', 'profile')->name('profile');

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Add these two new routes for registration
// Route::get ('/register', [RegisterController::class, 'create'])->name('register');
// Route::post('/register', [RegisterController::class, 'store']);