<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, 
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',          
            'sobrenome' => 'required|string|max:255',     
            'cep' => 'required|string|size:8',            
            'idade' => 'required|integer|min:0',          
            'data' => 'required|date',       
            'altura' => 'required|numeric',                
            'genero' => 'required|string|in:masculino,feminino,outro',
        ];
    }
}
