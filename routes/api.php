<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\MessageController;
use App\Http\Controllers\Api\V1\PostImageController;
use App\Http\Controllers\Api\V1\ShareController;
use App\Http\Controllers\Api\V1\CommentController;
use App\Http\Controllers\Api\V1\LikeController;
use App\Http\Controllers\Api\V1\ReplyController;



Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('users', UserController::class);
    Route::apiResource('users.posts', PostController::class);
    Route::apiResource('users.messages', MessageController::class);
    Route::apiResource('posts.postImages', PostImageController::class);
    Route::apiResource('posts.shares', ShareController::class);
    Route::get('posts/{post}/interactions', [PostController::class, 'interactions']);
    Route::apiResource('posts.likes', LikeController::class);
    Route::apiResource('posts.comments', CommentController::class);
    Route::apiResource('comments.replies', ReplyController::class);
    Route::apiResource('messages', MessageController::class);
    Route::apiResource('posts', PostController::class);
    Route::apiResource('shares', ShareController::class);
    Route::apiResource('likes', LikeController::class);
    Route::apiResource('comments', CommentController::class);
    Route::apiResource('replies', ReplyController::class);
});