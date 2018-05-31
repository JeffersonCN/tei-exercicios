<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable = ['titulo', 'conteudo', 'autor_id', 'categoria_id'];
}
