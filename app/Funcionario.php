<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Funcionario extends Authenticatable
{
    protected $fillable = [
        'Nome',
        'CPF',
        'Telefone',
        'Email',
        'Senha',
        'Admin',
    ];

    protected $hidden = [
        'Senha',
    ];

    public function getAuthPassword()
    {
        return $this->Senha;
    }
}
