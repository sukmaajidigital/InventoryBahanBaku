<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ROUTE UNTUK LOGIN
Route::get('/', function () {
    return view('auth/login');
});
// ROUTE MENAMPILKAN DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// HALAMAN YANG BISA DIAKSES OLEH ADMIN
Route::middleware(['auth', 'role:1,2,3,4,5,6'])->group(function () {


    // PROFIL
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
