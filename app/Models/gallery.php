<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table='galleries';

    protected $fillable = ['title','description','images','status'];
}
