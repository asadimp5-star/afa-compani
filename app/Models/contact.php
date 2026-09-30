<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Override;

class Contact extends Model
{
    use Translatable; 

    protected $table = 'contact_us';

    public $translatedAttributes = ['co_adress' ,'factory_adress','description','phone','phone1','email'];

    
    protected $fillable = ['img','img1'];

    protected $translationModel = ContactUsTranslation::class;

}
