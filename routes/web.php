<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::domain('admin.localhost')->group(function () {
    Route::get('/', [AdminController::class, "index"]);
    Route::get('/posts/create', [AdminController::class, "create"]);
    Route::post('/posts', [AdminController::class, "show"]);
    Route::delete('/posts/{post:id}', [AdminController::class, "destroy"]);
    Route::get('/posts/{post:id}/edit', [AdminController::class, "edit"])->name('post.edit');
    Route::patch('/posts/{post:id}', [AdminController::class, 'update']);
    Route::delete('/comments/{id}', [AdminController::class, 'deleteComment']);
});


Route::get('/', [PostController::class, "index"]);
Route::get('/posts/{id}', [PostController::class, "show"])->name('post');
Route::post('/comments', [CommentController::class, "store"]);
