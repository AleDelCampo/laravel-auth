<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'required|max:8000',
            'image' => 'file|max:1024|nullable|mimes:jpg,png',
            'technology' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Inserisci Titolo!!',
            'title.max' => "Puoi usare al massimo :max caratteri",
            'description.required' => 'Facci capire almeno cosa sia!!',
            'description.max' => "Puoi usare al massimo :max caratteri",
            'image.mimes' => "Inserisci un immagine",
            'image.max' => "Peso limite 1024 KB"
        ];
    }
}
