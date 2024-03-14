<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable=[
        'course_name',
        'description',
        'requirements',
        'learn',
        'duration',
        'articles',
        'resources',
        'access',
        'course_image',
    ];

    public function meta()
    {
        return $this->hasOne(Meta::class, 'table_id');
    }
}
