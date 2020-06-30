<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessaoFormRequest extends FormRequest
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
            'idFilme'=>'required',
            'idSala'=>'required',
            'data'=>'required',
            'hora'=>'required',
        ];
    }

    public function messages()
    {
      return  [
            'idFilme.required'=>"Campo Filme é obrigatório",
            'idSala.required'=>"Campo Sala é obrigatório",
            'data.required'=>"Campo Data é obrigatório",
            'hora.required'=>"Campo Hora é obrigatório",
        ];
    }
}
