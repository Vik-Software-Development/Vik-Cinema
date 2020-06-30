<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessão extends Model
{
    protected $fillable = ['idFilme','idSala','data','hora'];
}
