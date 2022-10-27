<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminsRequest extends FormRequest
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
        $roles =  [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required',
            'phone' => 'required|numeric',
            'role_id' => 'required', 
        ];
        if(request()->method() == 'PUT') $roles['email'] = 'exists:admins,email';
        return $roles;
    }
}
