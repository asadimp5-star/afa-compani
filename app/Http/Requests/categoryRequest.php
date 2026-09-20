<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $category= $this->route('post') ?? $this->route('id');
        $categoryId = is_object($category) ? $category->id : $category;

        return [

            'imags'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'delete_imge'=> 'nullable|boolean',
            'product_type'=> 'required|in:0,1,2,3',
            'product_code' => 'nullable|max:100',
            

            'fa' => 'nullable|array',
          
            'fa.title' => 'nullable|min:10|max:100',
            'fa.slug' => [
                'nullable','string','max:255',
                Rule::unique('categories_translations','slug')->ignore($categoryId,'categories_id')->where('locale','fa')
            ],
            'fa.description'=>'nullable|string|max:2000',
            'fa.delete_imge'=>'nullable|boolean',
            
            
            'en' => 'nullable|array',
            
            'en.title' => 'nullable|min:10|max:100',
            'en.slug' => [
                'nullable','string','max:255',
                Rule::unique('categories_translations','slug')->ignore($categoryId,'categories_id')->where('locale','en')
            ],
            'en.description'=>'nullable|string|max:2000',
           
        ];
    }
}
