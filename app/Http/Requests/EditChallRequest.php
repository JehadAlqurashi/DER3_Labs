<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;

class EditChallRequest extends FormRequest
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
     * @return array<string, mixed>
     */
     public function rules()
    {
        return [
            "title" => ['required'],
            "score" => ['required','numeric'],
            "description" => ['required'],
            "hint" => ['required'],
            "flag" => ['required'],
        ];
    }




    public function messages()
    {
        return [
            'title.required'=>"the title is required",
            'score.required'=>"the score is required",
            'description.required'=>"the title is required",
            'hint.required'=>"the title is required",
            'flag.required'=>"the title is required",];




    }

}
