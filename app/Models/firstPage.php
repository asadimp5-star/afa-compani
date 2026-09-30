<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class FirstPage extends Model
{

     use Translatable; 

    protected $table='first_pages';

    public $translatedAttributes = ['baner' , 'description' , 'description1','description2'];


    protected $fillable = ['Fimg1','Fimg2','Fimg3','images0','images','images1'];

    
    

}

