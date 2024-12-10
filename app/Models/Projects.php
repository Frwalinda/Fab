<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
           protected $fillable = ['title', 'short_description','content','image'];

}
