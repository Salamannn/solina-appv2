<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['title_id', 'banner_id', 'foundermsg_id','title_en', 'banner_en', 'foundermsg_en'];
}
