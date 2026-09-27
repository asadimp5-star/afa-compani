<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FirstPageTranslation extends Model
{
    public $table='first_page_translations';
    public $timestamps = false;

    public $fillable = ['baner' , 'description' , 'description1','description2'];

}
