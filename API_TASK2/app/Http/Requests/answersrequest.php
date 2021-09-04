<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class answersrequest extends FormRequest
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
            //
              //check the title & body are provided and has at least 3 charachters
              'title'=>'required|min:3',
              'descrition'=>'required|min:3',

              'questions_id'=>'required|numeric',
            //   Rule::exists('answers')->where(function($query)
            //   {

            //       echo $query->where('questions_id')->count()<5;
            //           return $query->where('questions_id')->count()<5;
            //   })

        ];
    }
}
