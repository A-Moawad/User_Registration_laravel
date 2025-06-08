<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\SetLocale;  
use Illuminate\Support\Facades\Route;

// Wrap all routes inside SetLocale middleware group
Route::middleware([SetLocale::class])->group(function () {

    // Home or welcome page
    Route::view('/', 'home')->name('home');

    // Register page route
    Route::view('/register', 'register')->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

    // Login page route
    Route::view('/login', 'login')->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

    // Profile page route
    Route::view('/profile', 'profile')->name('profile');

    // Logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Language switcher route
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
