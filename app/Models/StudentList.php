<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentList
{
    public static function all()
    {
        return[
            [
                'id' => 1,
                'slug' => 'student-1',
                'name' => 'John Doe',
                'age' => 5,
                'grade' => 'K1',
                'class' => '1st',
                'teacher' => 'Mr. Smith',
                'address' => '123 Main St',
                'parent' => 'Jane Doe',
                'special_notes' => 'none',
            ],
            [
                'id' => 2,
                'slug' => 'student-2',
                'name' => 'Ethan Fank',
                'age' => 6,
                'grade' => 'K1',
                'class' => '1st',
                'teacher' => 'Mr. Smith',
                'address' => '456 Elm St',
                'parent' => 'Peter Fank',
                'special_notes' => 'none',
            ],
        ];
    }
}
