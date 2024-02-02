<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'name' => 'nullable|string',
            'surname' => 'nullable|string',
            'email' => 'nullable|email',
            'from' => 'nullable|integer',
            'to' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Это поле необходимо заполнить',
            'name.string' => 'Это поле должен быть строкой',
            'surname.required' => 'Это поле необходимо заполнить',
            'surname.string' => 'Это поле должен быть строкой',
            'email.required' => 'Это поле необходимо заполнить',
            'email.email' => 'Это поле должно быть формата электронной почты',
            'from.integer' => 'Это поле должно быть числом',
            'to.integer' => 'Это поле должно быть числом',
            'description.string' => 'Это поле должно быть строкой',
            'is_married.string' => 'Это поле должно быть строкой',
        ];
    }
}
