<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
            "code" => 'required|min:3',
            'team_id' => 'required',
            'name' => 'required|min:6',
            'dob' => 'required|date',
            'gender' => 'required',
            'phone' => 'required',
            'CMND' => 'required|min:9|max:12',
            'email' => 'required|email',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Nhập vào mã nhân viên',
            'code.min' => 'Mã có ít nhất 3 ký tự',
            'team_id.required' => 'Nhập vào bộ phận công tác',
            'name.required' => 'Cần nhập tên',
            'name.min' => 'Tên có ít nhất 6 ký tự',
            'dob.required' => 'Cần nhập ngày sinh',
            'dob.date' => 'sai định dạng ngày',
            'gender.required' => 'Cần chọn giới tính',
            'phone.required' => 'Cần nhập số điện thoại',
            'CMND.required' => 'Cần nhập số CMND',
            'CMND.min' => 'it nhất 9 số',
            'CMND.max' => 'Nhiều nhất 12 số',
            'email.required' => 'Cần nhập email',
            'email.email' => 'Sai định dạng',
            'address.required' => 'Cần nhập địa chỉ'
        ];
    }
}
