<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'batch',
    ];

    public function dispositivos()
    {
        return $this->hasMany(Dispositivo::class);
    }
}