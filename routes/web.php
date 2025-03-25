<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    sleep(2);
    return Inertia::render('Home');
});

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/user/add', [UserController::class, 'add']);

Route::post('/user', [UserController::class, 'store']);

Route::get('/upload-file', [FileController::class, 'viewFormUpload']);
Route::post('/upload-file', [FileController::class, 'store']);
// Route::inertia('/user', 'User/All');