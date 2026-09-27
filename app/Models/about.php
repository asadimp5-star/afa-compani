<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use Translatable; 
    protected $table='abouts';

    public $translatedAttributes = ['title' , 'description','description1','slug'];

    protected $fillable = ['images0','images'];

    protected $translationModel = AboutsTranslation::class;

    
}
