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

Route::get('/guru', function () {
    return view('guru',['title' => 'Guru']);
});

Route::get('/murid', function () {
    return view('murid',['title' => 'Murid']);
});

Route::get('/orangtua', function () {
    return view('orangtua',['title' => 'Orang Tua']);
});
Route::get('kelas/indatakelas', function () {
    return view('inputdatakelas',['title' => 'Menambahkan Data Kelas']);
});

// Route::get('/login', function () {
//     return view('login');
// });
