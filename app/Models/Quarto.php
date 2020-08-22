<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'hotel_id',
        'tipo',
        'descricao',
        'preco',
        'imagem'
    ];

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel');
    }
}
