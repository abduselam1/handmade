<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fullname' => ['required', 'string', 'max:255','min:3'],
            'username' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Full name is required',
            'fullname.max:255' => 'Invalid name',
            'fullname.min:3' => 'Invalid name',
            'username.required' => 'Username should not be empty',
            'username.unique:users' => 'This username already taken please try another one.',
            'email.required'=> 'Email is required',
            'email.unique:users'=> 'This email is already taken please try another one.',
            'email.email'=> 'Invalid Email address',
            'password.required' => "passowrd is required",
            'password.min:8' => "Your password must be larger than 8 character"
        ];
    }
}
