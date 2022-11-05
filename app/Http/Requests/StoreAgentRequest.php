<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgentRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:agent_users,email',
            'password' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'agents_files' => 'required',
            'logo' => 'required',
            'location' => 'required',
        ];
    }
}
