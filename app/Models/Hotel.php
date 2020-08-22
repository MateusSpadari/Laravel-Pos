<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'localizacao',
        'descricao',
        'imagem'
    ];

    public function quartos()
    {
        return $this->hasMany('App\Models\Quarto');
    }
}
