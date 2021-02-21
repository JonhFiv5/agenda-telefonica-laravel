<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContatoRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'sobrenome' => 'max:255',
            'telefone' => 'required|min:8|regex:/[0-9 -]+/',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Você precisa informar um nome',
            'nome.max' => 'O nome precisa ter até 255 caracteres',
            'sobrenome.max' => 'O sobrenome precisa ter até 255 caracteres',
            'telefone.required' => 'Você precisa informar um telefone',
            'telefone.regex' => 'Caracteres inválidos no telefone',
            'telefone.min' => 'O telefone precisa ter no mínimo 8 caracteres',
        ];
    }
}
