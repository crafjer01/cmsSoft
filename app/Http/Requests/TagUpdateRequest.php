<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagUpdateRequest extends FormRequest
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
            'name' => 'requred',
            'slug' => 'required|unique:tags,slug, ' . $this->tag,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre de la etiqueta es obligatorio.',
            'slug.required' => 'El slug de la etiqueta es obligatorio.',
            'name.unique' => 'El slug de la etiqueta debe ser único.',
        ]
    }
}
