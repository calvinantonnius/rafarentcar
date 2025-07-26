<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/mobil', function () {
    return view('pages.mobil');
})->name('mobil');

Route::get('/syarat', function () {
    return view('pages.syarat');
})->name('syarat');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

