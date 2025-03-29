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

Route::get('chat', function () {
    return view('components.chat');
});
Route::get('chats', function () {
    return view('components.chats');
});
Route::get('con', function () {
    return view('components.conversation');
});

Route::get('b1', function () {
    return view('components.buble_1');
});

Route::get('b2', function () {
    return view('components.buble_2');
});

Route::get('set', function () {
    return view('components.setting');
});

Route::get('pri', function () {
    return view('components.privacy');
});

Route::get('/index', function () {
    return view('pages.index');
});