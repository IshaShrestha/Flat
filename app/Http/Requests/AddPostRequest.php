<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|string|max:50',
            'description'=>'required',
            'category'=>'required|exists:categories,slug',
            'image' => 'nullable|file|max:1024|mimes:jpeg,png',
            'post_description'=>'required|string|max:100'

        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Enter Post title',
            'description.required'=>'Enter description',
            'category'=>'Select Category',
            'post_description'=>'Enter small Description'

        ];
    }
}
