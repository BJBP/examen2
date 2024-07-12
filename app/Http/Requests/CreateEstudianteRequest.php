<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEstudianteRequest extends FormRequest
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
            //
            'nombre' => 'required',
            'curso' => 'required',
            'nota1' => 'required',
            'nota2' => 'required'
        ];
    }
    public function messages(){
        return [
            'nombre.required' => 'Se necesita un nombre para el estudiante',
            'curso.required' => 'Se necesita un curso para el estudiante',
            'nota1.required' => 'Se necesita una nota en el campo nota 1 para el estudiante',
            'nota2.required' => 'Se necesita una nota en el campo nota 2 para el estudiante'
        ];
    }
    
}
