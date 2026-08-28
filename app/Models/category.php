<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table='categories';

    protected $fillable = ['title','product_code','slug','description','imags','product_type','status'];

    public function comment(){
        return $this->hasMany(comment::class,'cat_Id','id');
    }
}
