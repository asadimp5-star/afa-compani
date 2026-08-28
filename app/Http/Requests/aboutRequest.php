<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class aboutRequest extends FormRequest
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
            'title'=>'nullable',
            'images0'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'description'=>'nullable',
            'images'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'description1'=>'nullable',
            'delete_imge'=> 'nullable|in:0,1',
            'delete_imge0'=> 'nullable|in:0,1',

            
        ];
    }
}
