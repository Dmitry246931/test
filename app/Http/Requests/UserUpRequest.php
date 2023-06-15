<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpRequest extends FormRequest
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
            'family' => 'required|alpha',
            'name' => 'required|alpha',
            'name_father' => 'required|alpha',
            'phone' => 'required|regex:/\+(7)\h\([0-9]{3}\)\h[0-9]{3}\-[0-9]{2}\-[0-9]{2}/|size:18',
        ];
    }
}
