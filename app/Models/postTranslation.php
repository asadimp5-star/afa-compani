<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostTranslation extends Model
{
    public $table='post_translations';
    public $timestamps = false;

    public $fillable = ['title','slug','description','description1','description2'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
