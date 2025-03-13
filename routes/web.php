<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

// Route::view('youtube', 'youtube')
//     ->middleware(['auth', 'verified'])
//     ->name('youtube');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

Route::view('/', 'welcome')->name('welcome');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');
Route::view('youtube', 'youtube')->middleware(['auth'])->name('youtube');
Route::view('estatistics', 'estatistics')->middleware(['auth'])->name('estatistics');

require __DIR__.'/auth.php';
