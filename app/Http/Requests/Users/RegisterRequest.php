<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'nickname' => 'required|min:3|max:30|',
            'email' => 'required|min:5|max:30|email|unique:users',
            'password' => 'required',
            'password2' => 'required|same:password'
        ];
    }

    protected $messages = [
        'nickname.required' => '昵称必填',
        'email.required' => '邮箱必填',
        'password.required' => '密码必填',
        'password2.required' => '重复密码必填',
        'password2.same' => '两次密码不一样'
    ];

    public function messages()
    {
        return $this->messages;
    }

}
