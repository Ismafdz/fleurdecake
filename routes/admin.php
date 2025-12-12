<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\BookingAdminController;
use App\Http\Controllers\Admin\PaymentAdminController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('classes', ClassroomController::class);
Route::resource('packages', PackageController::class);
Route::resource('schedules', ScheduleController::class);
Route::get('/bookings', [BookingAdminController::class, 'index'])->name('bookings.index');
Route::get('/bookings/{booking}', [BookingAdminController::class, 'show'])->name('bookings.show');
Route::post('/bookings/{booking}/status/{status}', [BookingAdminController::class, 'updateStatus'])
    ->name('bookings.status');
Route::get('/payments', [PaymentAdminController::class, 'index'])->name('payments.index');
Route::get('/payments/{payment}', [PaymentAdminController::class, 'show'])->name('payments.show');
Route::post('/payments/{payment}/approve', [PaymentAdminController::class, 'approve'])->name('payments.approve');
Route::post('/payments/{payment}/reject', [PaymentAdminController::class, 'reject'])->name('payments.reject');