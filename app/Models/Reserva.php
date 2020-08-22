<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'usuario_id',
        'quarto_id',
        'num_de_convidados',
        'chegada',
        'partida'
    ];

    public function quarto()
    {
        return $this->belongsTo('App\Models\Quarto');
    }
}
