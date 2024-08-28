<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\ClassList;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/classes', function () {
    return view('classes',['title' => 'Class', 'classes' => ClassList::all()]);
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

Route::get('/class/inpclass', function () {
    return view('inputnewclass',['title' => 'Add New Class']);
});

Route::get('/classes/{slug}', function ($slug) {
    $class_detail = Arr::first(ClassList::all(), function($class_detail) use ($slug){
        return $class_detail['slug'] == $slug;
    });

    return view('class', ['title' => 'Detail Class', 'class_detail' => $class_detail]);
});

// Route::get('/login', function () {
//     return view('login');
// });
