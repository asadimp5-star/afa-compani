<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $table='category_translations';
    public $timestamps = false;

    public $fillable = ['title','slug','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

