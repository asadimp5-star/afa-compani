<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class categoryRequest extends FormRequest
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
            'title'=> 'required|min:5',
            'product_code'=> 'required|min:5',
            'description'=> 'required|string|max:2000',
            'imags'=> 'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'product_type'=> 'required|in:0,1,2,3',
            'delete_imge'=> 'nullable|boolean'
        ];
    }
}
