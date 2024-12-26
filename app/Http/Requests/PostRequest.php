<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Allow all users to make this request
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required', // Fixed spacing and arrow operator
            'image' => ['required', 'file', 'image'], // Ensures the image validation rule is properly formatted
            'category_id' => 'required', // Corrected arrow operator
        ];
    }
}
