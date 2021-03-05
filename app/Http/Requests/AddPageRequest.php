<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPageRequest extends FormRequest
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
            'meta_title'=>'required|string|max:100',
            'meta_description'=>'required|string|max:100',
            'description'=>'required|string',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Enter Page title',
            'meta_title.required'=>'Enter Meta title',
            'meta_description'=>'Enter meta description',
            'description'=>'Enter Description'

        ];
    }
}
