<?php

use App\Http\Middleware\SetLocale;  
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhatsAppCheckController;
use Illuminate\Support\Facades\Route;

// Wrap all routes inside SetLocale middleware group
Route::middleware([SetLocale::class])->group(function () {

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
});


Route::get('/whatsapp-check', [WhatsAppCheckController::class, 'form'])->name('whatsapp.form');
Route::post('/whatsapp-check', [WhatsAppCheckController::class, 'check'])->name('whatsapp.check');


// Language switcher route
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});





