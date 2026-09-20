<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesTranslation extends Model
{
    public $table='categories_translations';
    public $timestamps = false;

    public $fillable = ['title','slug','description'];
}
