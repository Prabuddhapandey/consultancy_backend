<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'country_image',
        'description',
        'requirement',

    ];

    public function meta()
    {
        return $this->hasOne(Meta::class,'table_id');
    }
}
