<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anuncios extends Model
{
    use HasFactory;

    protected $fillable = [
      'publicar_anuncio',
      'categoria',
      'titulo',
      'descripccion',
      'detalles',
      'datos_de_contacto',
      'ubicacion',
    ];

}
