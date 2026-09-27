<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class galleryRequest extends FormRequest
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

            'images'=> 'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            
            

            'fa' => 'nullable|array',

            'fa.title'=> 'nullable|min:5',
            'fa.description'=> 'nullable|string|max:2000',

                   
            
            'en' => 'nullable|array',

            'en.title'=> 'nullable|min:5',
            'en.description'=> 'nullable|string|max:2000',

           
        ];
     
    }
}
