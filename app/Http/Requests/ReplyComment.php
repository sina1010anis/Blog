<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplyComment extends FormRequest
{
    /**
     * Determine if the admin is authorized to make this request.
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
            'name' => 'required|min:3|max:10',
            'email' => 'required|email',
            'comment' => 'required|min:5|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام را وارد کنید' ,
            'name.min' => 'کمتر از 3 کارکتر برای نام مجاز نمی باشد' ,
            'name.max' => 'بیشتر از 10 کارکتر برای نام مجاز نمی باشد' ,
            'comment.required' => 'کامنت را وارد کنید' ,
            'comment.min' => 'کمتر از 5 کارکتر برای کامنت مجاز نمی باشد' ,
            'comment.max' => 'بیشتر از 255 کارکتر برای کامنت مجاز نمی باشد' ,
            'email.required' => 'ایمیل را وارد کنید' ,
            'email.email' => 'فرمت ایمیل را رعایت کنید' ,
        ];
    }
}
