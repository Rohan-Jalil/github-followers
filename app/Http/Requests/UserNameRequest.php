<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UserNameRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'phone_id' => 'required',
        ];
    }
}