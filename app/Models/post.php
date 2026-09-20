<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class post extends Model
{

    

    use Translatable; 
    public $table='posts';
    public $translatedAttributes = ['title' , 'slug' , 'description' , 'description1' , 'description2'];

    public $fillable = ['images0','images','images1','user_Id'];

    

     public function user(){
       return $this->belongsTo(user::class,'user_Id','id');
    }
}
