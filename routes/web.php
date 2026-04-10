<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Ini adalah Halaman Tentang Aplikasi Event HUb</h1>';
});

Route::get('/kontak', function () {
    return view('contact');
});
