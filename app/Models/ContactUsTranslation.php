<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUsTranslation extends Model
{
    public $table='contact_us_translations';
    public $timestamps = false;

    public $fillable = ['co_adress' ,'factory_adress','description','phone','phone1','email'];
}
