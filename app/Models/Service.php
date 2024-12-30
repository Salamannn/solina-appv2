<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title_id',
        'descriptions_id',
        'title_en',
        'descriptions_en',
    ];

    protected $casts = [
        'descriptions_id' => 'array', // Mengonversi JSON ke array
        'descriptions_en' => 'array', // Mengonversi JSON ke array
    ];
}
