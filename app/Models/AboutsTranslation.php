<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutsTranslation extends Model
{
      public $table='abouts_translations';
    public $timestamps = false;

    public $fillable = ['title' , 'description','description1','slug'];
}
