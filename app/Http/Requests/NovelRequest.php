<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NovelRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'chapter' => 'required|string|max:255',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên truyện không được để trống!',
            'name.max' => 'Tên truyện không được quá 255 ký tự!',
            'chapter.required' => 'Tên chương không được để trống!',
            'chapter.max' => 'Tên chương không được quá 255 ký tự!',
            'content.required' => 'Nội dung truyện không được để trống!',
        ];
    }
}
