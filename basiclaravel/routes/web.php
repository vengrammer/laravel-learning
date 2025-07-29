<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/add', [StudentsController::class, 'add']);
Route::get('/show', [StudentsController::class, 'show']);
Route::get('/update', [StudentsController::class, 'update']);
Route::get('/del', [StudentsController::class, 'del']);
Route::get('/count', [StudentsController::class, 'count']);
Route::get('/findingOrCreating', [StudentsController::class, 'findingOrCreating']);


Route::get('/post/{title}/{body}', [PostController::class, 'post']);
Route::get('/comments', [PostController::class, 'comments']);

Route::get('/comment/{post_id}/{comment}', [CommentController::class, 'comment']);