<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/kelas', function () {
    return view('kelas',['title' => 'Kelas']);
});

// Route::get('/login', function () {
//     return view('login');
// });
