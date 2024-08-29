<?php

namespace App\Models;

class ClassList
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'class-1',
                'name' => 'Class 1',
                'description' => 'This is class 1',
                'teachers_assigned' => 4,
                'students_assigned' => 20,
            ],
            [
                'id' => 2,
                'slug' => 'class-2',
                'name' => 'Class 2',
                'description' => 'This is class 2',
                'teachers_assigned' => 3,
                'students_assigned' => 15,
            ],
        ];
    }
}
