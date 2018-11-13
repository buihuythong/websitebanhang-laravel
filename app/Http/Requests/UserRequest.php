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
            'name'  => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'repassword' => 'required',
            'level' => 'required|max:1',
            'active' => 'required|max:1',
            'avatar' => 'required|image',
        ];
    }

    public function messages(){
        return [
            'name.required'         => 'Họ và tên không được để trống',
            'email.required'        => 'Hòm thư điện tử không được để trống',
            'email.unique'          => 'Email đã tồn tại',
            'password.required'     => 'Mật khẩu không được để trống',
            'repassword.required'   => 'Chưa nhập lại mật khẩu',
            'level.required'        => 'Quyền hạn không được để trống',
            'active.required'       => 'Kích hoạt không được để trống',
            'email.email'           => 'Email không hợp lệ',
            'level.max'             =>  'Quyền hạn không quá 1 ký tự',
            'active.max'            =>  'Quyền hạn không quá 1 ký tự',
            'avatar.required'       => 'Ảnh đại diện không được để trống',
            'avatar.image'           => 'Ảnh đại diện phải là một ảnh',

        ];
    }
}
