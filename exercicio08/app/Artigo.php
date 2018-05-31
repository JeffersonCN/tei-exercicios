<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable = ['titulo', 'conteudo', 'autor_id', 'categoria_id'];

    public function autor()
    {
        return $this->belongsTo(Autor);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria);
    }
}
