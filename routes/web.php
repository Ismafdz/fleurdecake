<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// =======================================================
// RUTE UTAMA (HOMEPAGE) 
// =======================================================
Route::get('/', function () {
    return view('homepage'); 
})->name('home');


// =======================================================
// RUTE AUTENTIKASI (DASHBOARD & PROFILE)
// =======================================================

Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/package/{slug}', function ($slug) {
    return view('package-detail', ['slug' => $slug]); 
})->name('package.show');

Route::get('/package/{slug}/book', function ($slug) {
    return view('booking-form', ['slug' => $slug]); 
})->middleware(['auth'])->name('package.book'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';