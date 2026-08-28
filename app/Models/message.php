<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class message extends Model
{
    
    protected $table='messages';

    protected $fillable = ['full_name','phone','email','title','description','status'];
}
