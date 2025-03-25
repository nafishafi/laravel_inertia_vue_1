<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    sleep(2);
    return Inertia::render('Home');
});

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/user/add', [UserController::class, 'add']);

Route::post('/user', [UserController::class, 'store']);


// Route::inertia('/user', 'User/All');