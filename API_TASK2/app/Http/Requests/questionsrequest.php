<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class questionsrequest extends FormRequest
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

             //check the title & body are provided and has at least 3 charachters
             'title'=>'required|min:3|unique:questions',
             'descrition'=>'required|min:3',
        ];
    }
}
