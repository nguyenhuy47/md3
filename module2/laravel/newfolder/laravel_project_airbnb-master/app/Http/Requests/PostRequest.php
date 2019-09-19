<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'price' => 'required|integer|min:1',
            'address' => 'required|min:10',
            'number_bathroom' => 'required|integer|min:1',
            'number_room' => 'required|integer|min:1',
            'title' => 'required',
            'describe' => 'required',
            'inputFileName' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'price.required' => 'Giá tiền không được để trống',
            'price.integer' => 'Giá tiền phải là số',
            'price.min' => 'Giá tiền phải lớn hơn 1 số',
            'address.required' => 'Địa chỉ không được để trống',
            'address.min' => 'Địa chỉ phải lớn hơn 10 kí tự',
            'number_bathroom.required' => 'Số phòng tắm không được để trống',
            'number_bathroom.integer' => 'Số phòng tắm phải là số',
            'number_bathroom.min' => 'Số phòng tắm phải lớn hơn 1 số',
            'number_room.required' => 'Số phòng ngủ không được để trống',
            'number_room.integer' => 'Số phòng ngủ phải là số',
            'number_room.min' => 'Số phòng ngủ phải lớn hơn 1 số',
            'title.required' => 'Tiêu đề không được để trống',
            'describe.required' => 'Nội dung không được để trống',
            'describe.required' => 'Nội dung không được để trống',
            'inputFileName.required' => 'Ảnh không được để trống',
        ];
    }
}
