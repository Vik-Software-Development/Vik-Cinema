<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    protected $fillable = [
        'sessão',
        'preço',
    ];

    public function user()
    {
        //return $this->belongsTo(Sessao::class,'sessao','id');
    }
}
