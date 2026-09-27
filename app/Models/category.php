<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Override;

class Category extends Model
{
    use Translatable; 

    protected $table='categories';

    public $translatedAttributes = ['title' , 'slug' , 'description'];


    protected $fillable = ['product_code','imags','product_type','status'];

    protected $translationModel = CategoryTranslation::class;

    

    #[Override]
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->whereTranslation('slug',$value)->firstOrFail();
    }

    

    public function comment(){
        return $this->hasMany(comment::class,'cat_Id','id');
    }
}
