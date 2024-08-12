<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cambia esto según tus reglas de autorización
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'string|max:255',
            // Agrega aquí más reglas de validación según tus necesidades
        ];
    }
}
