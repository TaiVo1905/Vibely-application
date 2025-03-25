<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});

Route::get('/mainlayout', function () {
    return view('Layouts.MainLayout');
});

Route::get('/messlayout', function () {
    return view('Layouts.MessageLayout');
});
