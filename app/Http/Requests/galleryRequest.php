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
            'title'=> 'required|min:5',
            'description'=> 'required|string|max:2000',
            'images'=> 'required|image|mimes:jpg,jpeg,gif,png|max:2024',
            'delete_img'=> 'nullable|boolean'
        ];
    }
}
