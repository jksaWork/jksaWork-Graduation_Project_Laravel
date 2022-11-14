<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferRequest extends FormRequest
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
            'title' =>'required',
            'price' =>'required|integer',
            'status' =>'required',
            'area_idd' =>'required',
            'type_idd' =>'required',
            'short_desc' =>'required',
            'long_desc' =>'required',
            'location' =>'required',
            'lat' =>'required',
            'long' =>'required',
            'main_image' => 'required',
            'sub_images' => 'required',
            'agent_id' => 'sometimes',
        ];
    }
}
