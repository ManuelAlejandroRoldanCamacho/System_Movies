<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_first_name' => ['required', 'string', 'max:100'],
            'user_last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'], //revisar unique
            'date_birth' => ['required', 'date'],
            'phone_number' => ['required', 'numeric', 'digits_between:10,20'], //ver el tamaño de un campo de tipo numerico
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required'],
            'user_photo' => ['sometimes', 'mimes:jpeg,png,jpg', 'max:2048'],
        ];

    }
}
