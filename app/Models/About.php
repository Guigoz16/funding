<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'social_media_address',
        'image'
    ];
    protected $casts = [
        'social_media_address' => 'array',
    ];
}
