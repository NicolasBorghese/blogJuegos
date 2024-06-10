<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'nombreJuego' => 'required|string|max:30',
            'resumenReview' => 'required|string|max:50',
            'contenidoReview' => 'required|string',
            'puntajeJuego' => 'required|numeric|min:0|max:10',
            'generoJuego' => 'required|string|max:20',
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
            'nombreJuego.required' => 'El nombre del juego es obligatorio.',
            'nombreJuego.string' => 'El nombre del juego debe ser una cadena de texto.',
            'nombreJuego.max' => 'El nombre del juego no puede superar los 255 caracteres.',

            'resumenReview.required' => 'El resumen de la review es obligatorio.',
            'resumenReview.string' => 'El resumen de la review debe ser una cadena de texto.',
            'resumenReview.max' => 'El resumen de la review no puede superar los 500 caracteres.',

            'contenidoReview.required' => 'El contenido de la review es obligatorio.',
            'contenidoReview.string' => 'El contenido de la review debe ser una cadena de texto.',

            'puntajeJuego.required' => 'El puntaje del juego es obligatorio.',
            'puntajeJuego.numeric' => 'El puntaje del juego debe ser un número.',
            'puntajeJuego.min' => 'El puntaje del juego no puede ser menor que 0.',
            'puntajeJuego.max' => 'El puntaje del juego no puede ser mayor que 10.',

            'generoJuego.required' => 'El género del juego es obligatorio.',
            'generoJuego.string' => 'El género del juego debe ser una cadena de texto.',
            'generoJuego.max' => 'El género del juego no puede superar los 255 caracteres.',

            'imgCard.required' => 'La imagen de la tarjeta es obligatoria.',
            'imgCard.image' => 'La imagen de la tarjeta debe ser una imagen válida.',
            'imgCard.mimes' => 'La imagen de la tarjeta debe ser un archivo de tipo: jpeg, png, jpg, gif.',
            'imgCard.max' => 'La imagen de la tarjeta no puede superar los 2MB.',

            'imgPortada.required' => 'La imagen de la portada es obligatoria.',
            'imgPortada.image' => 'La imagen de la portada debe ser una imagen válida.',
            'imgPortada.mimes' => 'La imagen de la portada debe ser un archivo de tipo: jpeg, png, jpg, gif.',
            'imgPortada.max' => 'La imagen de la portada no puede superar los 2MB.',
        ];
    }
}
