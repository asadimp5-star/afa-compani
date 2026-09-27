<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
     use Translatable; 

    protected $table='galleries';

    public $translatedAttributes = ['title','description'];


    protected $fillable = ['images','status'];
}
