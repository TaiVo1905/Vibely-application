<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('users', UserController::class);
    Route::apiResource('users.posts', MessageController::class);
    Route::apiResource('users.messages', MessageController::class);
    Route::apiResource('messages', MessageController::class);
    Route::apiResource('posts', MessageController::class);
});