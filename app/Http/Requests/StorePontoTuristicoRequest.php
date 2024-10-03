<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePontoTuristicoRequest extends FormRequest
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
            'nome' => 'required|string|max:255|unique:pontoTuristico,nome',
            'imagem' => 'required|string',
            'longitude_latitude' => 'required|string',
            'descricao' => 'required|text',
            'como_chegar' => 'required|string',
            'ativo' => 'required|boolean',
            'id_tipo_ponto_turistico' => 'required|exists:tipo_ponto_turistico,id',
            'id_endereco' => 'required|exists:endereco,id'
        ];
    }
}
