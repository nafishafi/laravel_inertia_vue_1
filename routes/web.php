<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    sleep(2);
    return Inertia::render('Home');
});

Route::get('/user', function () {
    sleep(2);
    $user = [
        'name' => 'Ben',
        'age' => '20'
    ];
    // return Inertia::render('User/All');
    return inertia('User/All', [
        'user' => $user
    ]);
});

// Route::get('/user', function () {
//     return Inertia::render('User/All', [
//         'user' => 'ben'
//     ]);
// });



// Route::inertia('/user', 'User/All');