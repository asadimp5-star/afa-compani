<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table='comments';

    protected $fillable = ['name','title','description','reply','status'];

    public function category(){
        return $this->belongsTo(category::class ,'cat_Id','id');
    }
}
