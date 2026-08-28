<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class contact extends Model
{
    protected $table = 'contact_uc';
    
    protected $fillable = ['co_adress','img','factory_adress','img1','description','phone','phone1','email'];
}
