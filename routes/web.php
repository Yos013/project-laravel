<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

// Halaman utama diarahkan ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Route Autentikasi Tamu (Guest)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route yang hanya bisa diakses setelah login
Route::middleware(['auth'])->group(function () {
    // Dashboard umum untuk semua user yang sudah login (petugas & pembaca)
    Route::get('/dashboard', function () {
    return view('layouts.dashboard');
    })->name('dashboard');

    // Route khusus Petugas (CRUD Surat)
    Route::middleware(['can:manage-letters'])->group(function () {
        Route::resource('surat-masuk', SuratMasukController::class);
        Route::resource('surat-keluar', SuratKeluarController::class);
    });
});