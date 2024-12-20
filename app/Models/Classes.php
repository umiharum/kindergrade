<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'class_id',
        'description',
        'grade',
        'student_assigned',
        'teacher_assigned'
    ];

}
