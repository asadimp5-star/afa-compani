<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class First_pageRequest extends FormRequest
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

            'images0'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'Fimg1'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'Fimg2'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'Fimg3'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'images'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'images1'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',

            'delete_imge'=> 'nullable|boolean',
            
            

            'fa' => 'nullable|array',

            'fa.baner'=>'nullable',
            'fa.description'=>'nullable',
            'fa.description1'=>'nullable',
            'fa.description2'=>'nullable',
            'fa.delete_imge'=>'nullable|boolean',
            
            
            'en' => 'nullable|array',

            'en.baner'=>'nullable',
            'en.description'=>'nullable',
            'en.description1'=>'nullable',
            'en.description2'=>'nullable',
           
        ];

    }
}
