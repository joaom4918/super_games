<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $fillable = [
        'titulo', 'imagem', 'plataforma','genero','descricao','arquivo'
    ];
}
