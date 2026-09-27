<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryTranslation extends Model
{
    public $table='gallery_translations';
    public $timestamps = false;

    public $fillable = ['title','description'];
}
