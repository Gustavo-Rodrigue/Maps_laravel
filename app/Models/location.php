<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable = ['name', 'description', 'latitude', 'longitude', 'address', 'category'];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
    ];
}
