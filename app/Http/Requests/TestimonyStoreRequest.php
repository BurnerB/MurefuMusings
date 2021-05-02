<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TestimonyStoreRequest extends Request
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
            'Person' => 'required|unique:testimonials|max:255',
            'Occupation'  => 'required|:testimonials|max:255',
            'Testimony'  => 'required|:testimonials|max:500',
        ];
    }
}
