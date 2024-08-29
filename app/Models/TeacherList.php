<?php

namespace App\Models;

class TeacherList
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'teacher-1',
                'name' => 'Taylor K',
                'email' => 'taylor.k@example.com',
                'phone' => '123456789',
            ],
            [
                'id' => 2,
                'slug' => 'teacher-2',
                'name' => 'Anya Steph',
                'email' => 'anya.steph@example.com',
                'phone' => '987654321',
            ],
        ];
    }
}
