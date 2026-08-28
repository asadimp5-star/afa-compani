<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class postRequest extends FormRequest
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
            'title' => 'max:100|min:10|required',
            'images0'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'images'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'images1'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'description'=>'nullable|string|max:2000',
            'description1'=>'nullable|string|max:2000',
            'description2'=>'nullable|string|max:2000',
            'delete_img'=>'nullable|boolean',
            'delete_img0'=>'nullable|boolean',
            'delete_img1'=>'nullable|boolean'
            
        ];
    }
}
