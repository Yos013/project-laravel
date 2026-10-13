<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;

Route::get('/', function () {
    return view('welcome');
});

// //route dasar
// Route::get('/surat-masuk', function () {
//     return ('halaman surat masuk');
// })->name ('surat-masuk.index');

// // route dengan parameter
// Route::get('/surat-masuk/{id}', function ($id) {
//     return 'Detail surat masuk dengan ID: ' . $id;
// })->name ('surat-masuk.show');

// route dengan parameter
Route::get('/surat-masuk', [SuratMasukController:: class,'index'])
->name ('surat-masuk.index');

Route::get('/surat-masuk/{id}', [SuratMasukController:: class,'show'])
->name ('surat-masuk.show');