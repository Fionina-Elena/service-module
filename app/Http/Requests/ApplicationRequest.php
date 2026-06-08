<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ];
    }

    public function messages(): array
    {
        $errors = [
            'name.required' => '* имя - обязательное поле',
            'email.required' => '* email - обязательное поле',
            'email.email' => '* введите корректный email',
            'message.required' => '* сообщение - обязательное поле',
            'message.min' => '* сообщение должно содержать не менее 10 символов',
        ];

        return $errors;
    }
}
