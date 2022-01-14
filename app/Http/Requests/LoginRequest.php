<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'emailOrUsername'=>['required'],
            'password' => ['required','min:8']
        ];
        
    }

    public function messages()
    {
        return [
            'emailOrUsername.required' => 'Invalid Email or username',
            'password.required' => "passowrd is required",
            'password.min:6' => "Your password must be larger than 8 character"
        ];
    }
}
