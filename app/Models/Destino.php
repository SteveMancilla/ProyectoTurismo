<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'precio',
        'imagen_url',
        'estado',
    ];

    public function categorias()
    {
        return $this->belongsToMany(CategoriaDestino::class, 'categoria_destino', 'destino_id', 'categoria_id');
    }
}

