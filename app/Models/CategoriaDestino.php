<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaDestino extends Model
{
    use HasFactory;

    protected $table = 'categorias_destino'; // Nombre correcto de la tabla

    protected $fillable = [
        'nombre',
    ];

    public function destinos()
    {
        return $this->belongsToMany(Destino::class, 'categoria_destino', 'categoria_id', 'destino_id');
    }
}

