<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSettingRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'description'=>'string|max:100',
            'meta_title'=>'string|max:50',
            'meta_description'=>'string|max:100',
            'primary_email'=>'required|email',
            'secondary_email'=>'required|email',
            'haunting_line'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'image'=>'nullable|file|max:1024|mimes:jpeg,png|dimensions:max_width=140,max_height=100'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Enter your website Name',
            'meta_title'=>'Enter your title',
            'primary_email'=>'Enter email address',
            'secondary_email'=>'Enter email address',
            'haunting_line'=>'Enter your number',
            'contact'=>'Enter your contact detail',
            'address'=>'Enter your address'
        ];
    }
}
