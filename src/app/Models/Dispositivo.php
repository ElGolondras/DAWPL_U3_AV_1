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
}
