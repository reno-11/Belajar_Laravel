<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "‘Hi! Selamat Datang di Website Laravel";
});

Route::get('/about', function () {
    return "NIS: 24993/2107.063, Nama: Arsya Mayreno Arnaldo, Kelas: X-RPB";
});

Route::get('/articles/{id}', function ($id) {
    return "Ini adalah halaman Artikel dengan ID: $id";
});
