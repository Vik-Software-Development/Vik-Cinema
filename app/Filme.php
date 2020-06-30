<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = ['nome','autor','genero','duracao'];
}
