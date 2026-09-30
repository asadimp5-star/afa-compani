<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

    protected $fillable = ['name','title','description','reply','status','cat_Id'];

    public function category(){
        return $this->belongsTo(Category::class ,'cat_Id','id');
    }
}
