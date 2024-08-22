<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/class', function () {
    return view('class',['title' => 'Class']);
});

Route::get('/teachers', function () {
    return view('teacher',['title' => 'Teachers']);
});

Route::get('/students', function () {
    return view('students',['title' => 'Students']);
});

Route::get('/parents', function () {
    return view('parents',['title' => 'Parents']);
});
Route::get('class/inpclass', function () {
    return view('inputnewclass',['title' => 'Add New Class']);
});

// Route::get('/login', function () {
//     return view('login');
// });
