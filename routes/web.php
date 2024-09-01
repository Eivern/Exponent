<?php

use Illuminate\Support\Facades\Route;

Route::fallback(fn() => view('errors.404'));

Route::get('/', fn() => view('welcome'))->name('home');

Route::group(['middleware' => 'guest'], function () {
    // 
});

require __DIR__ . '/auth.php';
