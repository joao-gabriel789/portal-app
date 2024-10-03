<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNegocioRequest extends FormRequest
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
            'nomeFantasia' => 'required|string|max:255', 
            'contato' => 'required|string',
            'latitude_longitude' => 'required|string|max:255',
            'descricao' => 'required|text',
            'ativo' => 'required|boolean',
            'id_tipo_negocio' =>'required|exists:tipo_negocio,id',
            'id_endereco' => 'required|exists:endereco,id'
        ];
    }
}
