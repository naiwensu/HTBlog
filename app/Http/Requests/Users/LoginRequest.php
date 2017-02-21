<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\Request;

class LoginRequest extends Request
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
            'email' => 'required'
        ];
    }

    protected $messages = [
        'email.required' => '邮箱必填'
    ];

    public function messages()
    {
        return $this->messages;
    }

}
