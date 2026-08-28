<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'First_name'=>'required',
            'Last_name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:8|confirmed',
            'role'=>'nullable|boolean'

        ];
    }
    protected $casts = [
        'password' => 'hashed'
    ];
}
