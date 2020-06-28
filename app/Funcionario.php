<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'Nome',
        'CPF',
        'Telefone',
        'Email',
        'Senha',
    ];

    protected $hidden = [
        'Senha',
    ];
}
