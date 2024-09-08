<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected static function booted()
    {
        static::created(function ($student) {
            $student->update([
                'slug' => Str::slug($student->name . '-' . $student->id),
            ]);
        });
    }
}
