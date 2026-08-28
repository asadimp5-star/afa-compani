<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    
    protected $table='abouts';

    protected $fillable = ['title','images0','description','images','description1','slug'];
    
}
