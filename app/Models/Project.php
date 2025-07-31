<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['client', 'project_date', 'project_name', 'description_id','description_en', 'image'];
}
