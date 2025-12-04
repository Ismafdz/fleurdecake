<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Diperlukan untuk route POST

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

// Rute Formulir Booking (/package/{slug}/book) - Hanya untuk user yang login
Route::get('/package/{slug}/book', function ($slug) {
    return view('booking-form', ['slug' => $slug]); 
})->middleware(['auth'])->name('package.book'); 

// Rute Konfirmasi Booking (POST) - Menerima data dari formulir
Route::post('/booking/confirm', function (Request $request) {
    // --- Logika Pemrosesan Data di sini ---
    // (Dalam aplikasi nyata, ini akan disimpan ke database)
    
    // Kita lempar data konfirmasi ke view booking-confirmation
    $data = [
        // Menggunakan nilai default jika input tidak terkirim (untuk testing)
        'package' => $request->package_class ?? 'N/A', 
        'people' => $request->num_people ?? 'N/A',
        'date' => $request->visit_date ?? 'N/A',
        'total' => $request->total_payment ?? 'N/A',
    ];

    return view('booking-confirmation', $data);
})->middleware(['auth'])->name('booking.confirm');

// Rute Profile Management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Memuat semua rute Login, Register, Logout dari Laravel Breeze.
require __DIR__.'/auth.php';