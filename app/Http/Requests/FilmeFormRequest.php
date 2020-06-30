<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeFormRequest extends FormRequest
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
            'nome'=>'required',
            'autor'=>'required',
            'genero'=>'required',
            'duracao'=>'required',
        ];
    }

    public function messages()
    {
      return  [
            'nome.required'=>"Campo Nome é obrigatório",
            'autor.required'=>"Campo Autor é obrigatório",
            'genero.required'=>"Campo Gênero é obrigatório",
            'duracao.required'=>"Campo Duração é obrigatório",
        ];
    }
}
