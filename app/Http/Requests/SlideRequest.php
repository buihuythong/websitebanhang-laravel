<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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
            'link' => 'required',
            'image' => 'required|image',
            'descripton' => 'required',
            'display' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required'         => 'Tên slide không được để trống',
            'link.required'        => 'Đường dẫn slide không được để trống',
            'image.required'          => 'Ảnh đại diện không được để trống',
            'image.image'          => 'Ảnh đại diện cần là một ảnh',
            'descripton.required'     => 'Mô tả không được để trống',
            'display.required'      => 'Cần lựa chọn hiển thị',

        ];
    }

   
}
