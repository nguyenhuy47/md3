<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginValation extends FormRequest
{
    /**
     * Determine if the userPostHouse is authorized to make this request.
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
            'username' => 'required|max:255',
            'password' => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Bạn bắt buộc phải nhập ',
            'username.required' => 'Bạn bắt buộc phải nhập ',
        ];
    }
}
