<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'instructor_image',
        'position',
        'fb',
        'insta',

    ];
}
