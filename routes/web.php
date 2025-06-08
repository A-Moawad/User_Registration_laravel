<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
<<<<<<< HEAD
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Add these two new routes for registration
// Route::get ('/register', [RegisterController::class, 'create'])->name('register');
// Route::post('/register', [RegisterController::class, 'store']);
=======
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
>>>>>>> d15e8bd702f1733b03ec4115d23da4dbbbfde93d
