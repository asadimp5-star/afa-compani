<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'co_adress'=>'nullable|string',
            'img'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'factory_adress'=>'nullable|string',
            'img1'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'description'=>'nullable|string',
            'phone'=>'nullable|digits:11',
            'phone1'=>'nullable|digits:11',
            'email'=>'nullable|email',
            'delete_imge'=>'nullable|boolean',
            'delete_imge0'=>'nullable|boolean'
            
            
        ];
    }
}
