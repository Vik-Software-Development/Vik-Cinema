<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    protected $fillable = [
        'sessão',
        'preço',
    ];

    public function sessao()
    {
        return $this->belongsTo('App\Sessão', 'sessao', 'id');
        // 1 - Classe que pertence
        // 2 - Chave Estrangeira nessa classe
        // 3 - Chave primaria da outra classe
    }
}
