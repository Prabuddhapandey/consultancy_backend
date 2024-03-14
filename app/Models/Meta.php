<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
    protected $fillable=[
        'page',
        'title',
        'meta_keywords',
        'meta_descriptions',
        'table_id',
    ];
    

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
    public function courses()
    {
        return $this->belongsTo(Courses::class);
    }
    
    

    // public function meta()
    // {
    //     return $this->hasOne(Destination::class);
    // }
}
