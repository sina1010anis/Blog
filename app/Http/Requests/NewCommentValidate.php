<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewCommentValidate extends FormRequest
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
            'name' => 'required|min:3|max:10',
            'sur_name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'comment' => 'required|min:5|max:255',
            'title' => 'required|min:5|max:50'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام را وارد کنید' ,
            'name.min' => 'کمتر از 3 کارکتر برای نام مجاز نمی باشد' ,
            'name.max' => 'بیشتر از 10 کارکتر برای نام مجاز نمی باشد' ,
            'sur_name.required' => 'فامیل را وارد کنید' ,
            'sur_name.min' => 'کمتر از 3 کارکتر برای فامیل مجاز نمی باشد' ,
            'sur_name.max' => 'بیشتر از 20 کارکتر برای فامیل مجاز نمی باشد' ,
            'comment.required' => 'کامنت را وارد کنید' ,
            'comment.min' => 'کمتر از 5 کارکتر برای کامنت مجاز نمی باشد' ,
            'comment.max' => 'بیشتر از 255 کارکتر برای کامنت مجاز نمی باشد' ,
            'email.required' => 'ایمیل را وارد کنید' ,
            'email.email' => 'فرمت ایمیل را رعایت کنید' ,
            'title.required' => 'موضوع را وارد کنید' ,
            'title.min' => 'کمتر از 5 کارکتر برای موضوع مجاز نمی باشد' ,
            'title.max' => 'بیشتر از 50 کارکتر برای موضوع مجاز نمی باشد' ,
        ];
    }
}
