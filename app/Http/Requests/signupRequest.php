<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
           'name'=>'required', 
            'phone'=>'required|numeric',
            'password'=>'required',
            'repassword'=>'required'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Username cannot be null',
            'phone.required'=>'Phone cannot be null',
            'phone.numeric'=>'Phone: Number only',
            'password'=>'Password cannot be null',
            'repassword.required'=>'Please enter your password again',
        ];
    }
}
