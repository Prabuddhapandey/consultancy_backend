<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable=[
        'total_courses',
        'total_students',
        'total_instructors',
        'satisfaction_rate',
    ];
}
