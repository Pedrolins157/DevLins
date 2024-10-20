<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descricao extends Model
{
    protected $fillable = 
    [
            'nome',
            'email',
            'contato',
            'descricao',
    ];
}
