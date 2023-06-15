<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'phone' => 'required|unique:users,phone|regex:/\+(7)\h\([0-9]{3}\)\h[0-9]{3}\-[0-9]{2}\-[0-9]{2}/|size:18',
            'gen' => '',
            'mark' => 'required',
            'model' => 'required',
            'color' => 'required',
            'gos_number' => 'required|unique:autos,gos_number|size:8|alpha_num|regex:/[А-Я]{1}[0-9]{3}[А-Я]{2}[0-9]{2}/u',
            'address' => 'required',

        ];
    }
}
