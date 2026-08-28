<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Override;

class post extends Model
{
    
    protected $table='posts';

    protected $fillable = ['title','images0','description','images','description1','images1','description2','slug','status','user_Id'];

    #[Override]
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(){
       return $this->belongsTo(user::class,'user_Id','id');
    }
}
