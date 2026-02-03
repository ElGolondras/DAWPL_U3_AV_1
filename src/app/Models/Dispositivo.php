<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dispositivo extends Model
{
    //
    protected $fillable = [
        'nombre',
        'tipo',
        'modelo',
        'estado',
        'aula_id',
    ];

    public function aula()
    {
        // Esto conecta la columna aula_id del dispositivo con el ID del aula
        return $this->belongsTo(Aula::class);
    }
}
