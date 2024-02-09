<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestCliente extends FormRequest
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
            'nombre' => 'required|string',
            'identificacion' => 'required|unique',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'nombre_empresa' => 'required|string',
            'contrasena' => 'required',
        ];
    }
}
