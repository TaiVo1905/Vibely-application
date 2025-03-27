<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('users', UserController::class);
    Route::apiResource('users.posts', MessageController::class);
    Route::apiResource('users.messages', MessageController::class);
    Route::apiResource('posts.postImages', MessageController::class);
    Route::apiResource('posts.shares', MessageController::class);
    Route::apiResource('posts.likes', MessageController::class);
    Route::apiResource('posts.comments', MessageController::class);
    Route::apiResource('comments.replies', MessageController::class);
    Route::apiResource('messages', MessageController::class);
    Route::apiResource('posts', MessageController::class);
    Route::apiResource('shares', MessageController::class);
    Route::apiResource('likes', MessageController::class);
    Route::apiResource('comments', MessageController::class);
    Route::apiResource('replies', MessageController::class);
});