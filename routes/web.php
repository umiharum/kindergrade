<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Classes;
use App\Models\Student;
use App\Models\TeacherList;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/classes', function () {
    return view('classes',['title' => 'Class', 'classes' => Classes::all()]);
});

Route::get('/teachers', function () {
    return view('teacher',['title' => 'Teachers', 'teachers' => TeacherList::all()]);
});

Route::get('/students', function () {
    return view('students',['title' => 'Students', 'students' => Student::all()]);
});

Route::get('/parents', function () {
    return view('parents',['title' => 'Parents']);
});

Route::get('/class/inpclass', function () {
    return view('inputnewclass',['title' => 'Add New Class']);
});

Route::get('/classes/{class:slug}', function (Classes $class) {

    return view('class', ['title' => 'Detail Class', 'class_detail' => $class]);
});

// Route::get('/login', function () {
//     return view('login');
// });
