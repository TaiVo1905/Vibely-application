<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group( function() {
    Route::get("/home", "index");
    Route::get("/explore", "explore");
    Route::get("/privacy", "privacy");
    Route::get("/settings", "settings");
    Route::get("/conversation", "conversation");
    Route::get("/signin", "signIn");
    Route::get("/signup", "signUp");
});