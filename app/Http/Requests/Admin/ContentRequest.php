<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'title_ru' => 'required|string|min:5',
            'category_ru' => 'required|string',
            'description_ru' => 'required|string',
            'title_kz' => 'required|string',
            'category_kz' => 'required|string',
            'description_kz' => 'required|string',
            'title_en' => 'required|string',
            'category_en' => 'required|string',
            'description_en' => 'required|string',
            'img' => 'file',
        ];
    }
}
