<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $method = $this->getMethod();

        //dd($method);

        if($method === "POST"){ //insert

            return [
                'title_movie' => ['required', 'string', 'min:6', 'max:100', 'unique:movies,title_movie'],
                'description_movie' => ['required', 'min:60', 'max:300'],
                'release_date' => ['required'],
                'duration' => ['required', 'min:6', 'max:20'],
                'image' => ['required', 'image', 'mimes:jpeg,png', 'max:2048'],
                'trailler' => ['required', 'min:6', 'max:100'],
                'calification' => ['required', 'numeric'],
            ];

        }
        
        if ($method === "PATCH"){ //update

            //dd($this->file('image'));

            return [
                'title_movie' => ['required', 'string', 'min:6', 'max:100', 'unique:movies,title_movie'], 
                'description_movie' => ['required', 'min:60', 'max:300'],
                'release_date' => ['required'],
                'duration' => ['required', 'min:6', 'max:20'],
                'image' => ['sometimes', 'required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'], //opcional
                'trailler' => ['required', 'min:6', 'max:100'],
                'calification' => ['required', 'numeric'],
            ];

        }

    }
}
