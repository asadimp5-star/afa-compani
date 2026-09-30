<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
        
        $post= $this->route('post') ?? $this->route('id');
        $postId = is_object($post) ? $post->id : $post;
    

        return [
            
            'images0'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'images'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'images1'=>'nullable|image|mimes:jpg,jpeg,gif,png|max:2024',
            'delete_img0'=> 'nullable|boolean',
            'delete_img'=> 'nullable|boolean',
            'delete_img1'=> 'nullable|boolean',

            'fa' => 'nullable|array',
          
            'fa.title' => 'nullable|min:10|max:100',
            'fa.slug' => [
                'nullable','string','max:255',
                Rule::unique('post_translations','slug')->ignore($postId,'post_id')->where('locale','fa')
            ],
            'fa.description'=>'nullable|string|max:2000',
            'fa.description1'=>'nullable|string|max:2000',
            'fa.description2'=>'nullable|string|max:2000',
            'fa.delete_img'=>'nullable|boolean',
            'fa.delete_img0'=>'nullable|boolean',
            'fa.delete_img1'=>'nullable|boolean',
            
            'en' => 'nullable|array',
            
            'en.title' => 'nullable|min:10|max:100',
            'en.slug' => [
                'nullable','string','max:255',
                Rule::unique('post_translations','slug')->ignore($postId,'post_id')->where('locale','en')
            ],
            'en.description'=>'nullable|string|max:2000',
            'en.description1'=>'nullable|string|max:2000',
            'en.description2'=>'nullable|string|max:2000',
                       
        ];
    }
}
