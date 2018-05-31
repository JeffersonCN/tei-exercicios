<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    public function artigos()
    {
        return $this->hasMany(Artigo);
    }
}
