<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTemplateRequest extends FormRequest
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
            'subject'=>'required|string|max:100',
            'description'=>'required|string|max:300'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Enter template Name',
            'subject.required'=>'Enter template subject',
            'description.required'=>'Enter your description'
        ];
    }
}
