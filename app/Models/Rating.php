<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'description',
        'rating',
        'profile_image',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
