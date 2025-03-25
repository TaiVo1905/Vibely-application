<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sidebar', function () {
    return view('components.sidebar');
});

Route::get('/mainlayout', function () {
    return view('Layouts.MainLayout');
});

Route::get('/messlayout', function () {
    return view('Layouts.MessageLayout');
});
