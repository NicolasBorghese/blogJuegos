<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticiaRequest extends FormRequest
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
            'tituloNoticia' => 'required|string|max:255',
            'resumenNoticia' => 'required|string|max:255',
            'contenidoNoticia' => 'required|string',
            'imgCard' => 'required|image|mimes:jpeg,png,jpg,gif',
            'imgPortada' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'tituloNoticia.required' => 'El título de la noticia es requerido',
            'resumenNoticia.required' => 'El resumen de la noticia es requerido',
            'contenidoNoticia.required' => 'El contenido de la noticia es requerido',
            'imgCard.required' => 'La imagen de la tarjeta es requerida',
            'imgPortada.required' => 'La imagen de portada es requerida',
            'imgCard.image' => 'El archivo de la tarjeta debe ser una imagen',
            'imgPortada.image' => 'El archivo de portada debe ser una imagen',
            'imgCard.mimes' => 'La tarjeta debe ser un archivo de tipo: jpeg, png, jpg, gif',
            'imgPortada.mimes' => 'La portada debe ser un archivo de tipo: jpeg, png, jpg, gif',
            'imgCard.max' => 'La tarjeta no debe exceder los 2 MB',
            'imgPortada.max' => 'La portada no debe exceder los 2 MB',
        ];
    }
}
