<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
            'archivo' => 'required|mimes:png,jpg,jpeg,gif'
        ];
    }

    public function messages()
    {
        return [
            'archivo.required' => 'Debes seleccionar una imagen.',
            'archivo.mimes' => 'El archivo debe ser de tipo png,jpg,jpeg,gif.'
        ];
    }
}
