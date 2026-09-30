<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'img'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'img1'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'delete_imge'=>'nullable|boolean',
            'delete_imge0'=>'nullable|boolean',
            
            

            'fa' => 'nullable|array',

            'fa.co_adress'=>'nullable|string',
            'fa.factory_adress'=>'nullable|string',
            'fa.description'=>'nullable|string',
            'fa.phone'=>'nullable|digits:11',
            'fa.phone1'=>'nullable|digits:11',
            'fa.email'=>'nullable|email',
            
            
            'en' => 'nullable|array',

            'en.co_adress'=>'nullable|string',
            'en.factory_adress'=>'nullable|string',
            'en.description'=>'nullable|string',
            'en.phone'=>'nullable|digits:11',
            'en.phone1'=>'nullable|digits:11',
            'en.email'=>'nullable|email',
           
        ];

    }
}
