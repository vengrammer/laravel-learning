<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('Home');
});

Route::post('/add', [StudentsController::class, 'add'])->name('add');
Route::get('/show', [StudentsController::class, 'show'])->name('show');
Route::get('/update', [StudentsController::class, 'update']);
Route::get('/del', [StudentsController::class, 'del']);
Route::get('/count', [StudentsController::class, 'count']);
Route::get('/findingOrCreating', [StudentsController::class, 'findingOrCreating']);


Route::get('/post/{title}/{body}', [PostController::class, 'post']);
Route::get('/comments', [PostController::class, 'comments']);

Route::get('/comment/{post_id}/{comment}', [CommentController::class, 'comment']);


Route::get('/testing', function (){
    return view('insert');
});

Route::post('/try', function(){
    return redirect('/');
})->name('try');

Route::get('/tried', [TestingController::class, 'try']);