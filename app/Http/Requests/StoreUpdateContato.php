<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateContato extends FormRequest
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
        $rules = [
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'telefone' => [
                'required',
                'string',
                'max:11',
                'unique:contatos',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:contatos',
            ],
        ];

        if ($this->method() === 'PUT') {
            $rules['telefone'] = [
                'required',
                'string',
                'max:20',
                Rule::unique('contatos')->ignore($this->id),
            ];
            $rules['email'] = [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('contatos')->ignore($this->id),
            ];
            }

        return $rules;
        
    }
}
