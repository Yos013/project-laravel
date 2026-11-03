<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

// Halaman Utama / Dashboard dengan pengecekan login
Route::get('/', function () {
    if (!auth()->check()) {
        return redirect()->route('login');
    }
    return view('layouts.dashboard');
})->name('dashboard');

// Route Login & Logout (Lengkap dengan name 'login.submit')
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route Resource Surat Masuk
Route::resource('surat-masuk', SuratMasukController::class)
    ->parameters(['surat-masuk' => 'id']);

// Route Resource Surat Keluar (Latihan Mandiri)
Route::resource('surat-keluar', SuratKeluarController::class)
    ->parameters(['surat-keluar' => 'id']);