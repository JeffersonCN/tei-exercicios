<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    protected $fillable = ['nome', 'email'];

    public function artigos()
    {
        return $this->hasMany(Artigo);
    }
}
