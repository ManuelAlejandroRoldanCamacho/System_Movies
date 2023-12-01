<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        return [
            'category' => ['required', 'min:2', 'max:100'], //, 'unique:t_categories,category'
        ];

    }

}
