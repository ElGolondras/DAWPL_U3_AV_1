<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dispositivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'modelo',
        'estado',
        'aula_id',
    ];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
}
