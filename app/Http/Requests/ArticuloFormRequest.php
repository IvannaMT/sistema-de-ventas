<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
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
           'idcategoria'=>'required',
           'codigo'=>'required|max:50',
           'nombre'=>'required|max:100',
           'stock'=>'required|numeric',
           'codigo'=>'max:512',
           'imagen'=>'mimes:jpeg,bmp,png'
        ];
    }
}
