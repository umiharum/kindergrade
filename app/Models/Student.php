<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
        'name',
        'slug',
        'age',
        'grade',
        'class',
        'teacher',
        'parent',
        'address',
        'phone',
        'special_note',
        'status',
    ];
}
