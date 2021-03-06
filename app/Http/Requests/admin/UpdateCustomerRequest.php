<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'name'    => 'required',
            'phone'   => 'required|regex:/^[0-9]+$/|min:10|max:11',
            'address' => 'required',
            'email'   => 'required',
            'gender'  => 'required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'    => 'Tên không được bỏ trống',
            'phone.required'   => 'Số điện thoại không được bỏ trống',
            'address.required' => 'Địa chỉ không được bỏ trống',
            'email.required'   => 'E-mail không được bỏ trống',
            'email.email'      => 'E-mail không đúng định dạng',
            'gender.required'  => 'Hãy chọn một giới tính'
        ];
    }
}
