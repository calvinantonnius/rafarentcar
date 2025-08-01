<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/mobil', function () {
    return view('pages.car-list');
})->name('car-list');

Route::get('/syarat-ketentuan', function () {
    return view('pages.syarat-ketentuan');
})->name('syarat');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/detail', function () {
    return view('pages.detail');
})->name('detail');

