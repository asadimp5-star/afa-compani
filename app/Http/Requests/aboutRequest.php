<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AboutRequest extends FormRequest
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
        $about= $this->route('about') ?? $this->route('id');
        $aboutId = is_object($about) ? $about->id : $about;

         return [

            'images0'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'images'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'delete_imge'=> 'nullable|in:0,1',
            'delete_imge0'=> 'nullable|in:0,1',            
            

            'fa' => 'nullable|array',

            'fa.title'=>'nullable',
            'fa.description'=>'nullable',
            'fa.description1'=>'nullable',

            'fa.delete_imge'=> 'nullable|in:0,1',
            'fa.delete_imge0'=> 'nullable|in:0,1',
            'fa.slug' => [
                'nullable','string','max:255',
                Rule::unique('abouts_translations','slug')->ignore($aboutId,'about_id')->where('locale','fa')
            ],
            
            
            'en' => 'nullable|array',

            'en.title'=>'nullable',
            'en.description'=>'nullable',
            'en.description1'=>'nullable',
            'en.slug' => [
                'nullable','string','max:255',
                Rule::unique('abouts_translations','slug')->ignore($aboutId,'about_id')->where('locale','en')
            ],

           
        ];
  
    }
}
