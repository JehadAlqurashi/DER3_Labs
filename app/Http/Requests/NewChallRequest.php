<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewChallRequest extends FormRequest
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
            "score" => ['required', 'numeric'],
            "description" => ['required'],
            "hint" => ['required'],
            "flag" => ['required'],
            "difficulty" => ['required'],
            "link" => ['required']
        ];


    }
}
