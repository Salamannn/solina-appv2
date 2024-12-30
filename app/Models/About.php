<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title_id',
        'visi_id',
        'misi_id',
        'about_id',
        'title_en',
        'visi_en',
        'misi_en',
        'about_en',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'misi_id' => 'array', // Kolom JSON untuk daftar misi Bahasa Indonesia
        'misi_en' => 'array', // Kolom JSON untuk daftar misi Bahasa Inggris
    ];
}
