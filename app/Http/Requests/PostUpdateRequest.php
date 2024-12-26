<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class PostUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'title' => 'required', // Fixed spacing and arrow operator
        'image' => 'required',    // Fixed spacing and arrow operator
        'description' => 'required', // Fixed spacing and arrow operator
        'category_id' => 'required', // Corrected arrow operator
        ];
    }
}
