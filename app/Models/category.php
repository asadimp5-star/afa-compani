<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable; 

    protected $table='categories';

    public $translatedAttributes = ['title' , 'slug' , 'description'];


    protected $fillable = ['product_code','imags','product_type','status'];

    protected $translationModel = CategoryTranslation::class;

    

public function getRouteKeyName()
    {
        return 'slug';
    }

    

    public function comment(){
        return $this->hasMany(comment::class,'cat_Id','id');
    }
}
