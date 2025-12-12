<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;

// =======================================================
// RUTE UMUM (Dapat Diakses Guest)
// =======================================================

// Rute Homepage (/)
Route::get('/', function () {
    return view('homepage'); 
})->name('home');

// Rute Detail Package (/package/{slug})
Route::get('/package/{slug}', function ($slug) {
    return view('package-detail', ['slug' => $slug]); 
})->name('package.show');


// =======================================================
// RUTE AUTENTIKASI (Membutuhkan Login)
// =======================================================

// Rute Dashboard: Setelah login berhasil, menampilkan view dashboard (homepage terautentikasi)
Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth', 'verified'])->name('dashboard');

// Menampilkan form booking
Route::get('/package/{slug}/book', [BookingController::class, 'form'])
    ->middleware('auth')
    ->name('package.book');

// Memproses booking
Route::post('/booking/confirm', [BookingController::class, 'confirm'])
    ->middleware('auth')
    ->name('booking.confirm');

Route::get('/booking/{booking}/payment', [PaymentController::class, 'form'])
    ->middleware('auth')
    ->name('payment.form');

Route::post('/booking/{booking}/payment', [PaymentController::class, 'store'])
    ->middleware('auth')
    ->name('payment.store');

// Rute Profile Management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; // bawaan breeze (biarkan)

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        require base_path('routes/admin.php');
    });
