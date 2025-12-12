<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
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

// TENTANG KAMI
Route::get('/about', function () {
    return view('about'); 
})->name('about');

// ARTIKEL
Route::controller(ArticleController::class)->group(function () {
    Route::get('/articles', 'index')->name('articles.index');
    Route::get('/articles/{slug}', 'show')->name('articles.show'); 
});


// =======================================================
// RUTE AUTENTIKASI (DASHBOARD & PROFILE)
// =======================================================

Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth', 'verified'])->name('dashboard');


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

Route::get('/booking/{booking}/payment', [PaymentController::class, 'form'])
    ->middleware('auth')
    ->name('payment.form');

Route::post('/booking/{booking}/payment', [PaymentController::class, 'store'])
    ->middleware('auth')
    ->name('payment.store');

use App\Http\Controllers\TransactionController; // Import Controller

// ... existing code ...

// Rute Profile Management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Transaction History
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');
});

require __DIR__.'/auth.php'; // bawaan breeze (biarkan)

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        require base_path('routes/admin.php');
    });
