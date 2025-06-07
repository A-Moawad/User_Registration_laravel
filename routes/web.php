<?php

use Illuminate\Support\Facades\Route;

// Home or welcome page
Route::view('/', 'welcome')->name('home');

// Register page route
Route::view('/register', 'register')->name('register');

// Login page route
Route::view('/login', 'login')->name('login');

// Profile page route (make sure you have a profile.blade.php view)
Route::view('/profile', 'profile')->name('profile');
