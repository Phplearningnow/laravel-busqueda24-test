<?php

namespace App\Http\Controllers\Anuncios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    public function inicio() {
        return view('anuncios.inicio');
    }
    public function crear() {
        return view('anuncios.crear');
    }
    public function almacenar() {
        return view('anuncios.almacenar');
    }

    public function editar($anuncio) {
        return view('anuncios.editar');
    }
    public function mostrar($anuncio) {
        return view('anuncios.mostrar');
    }

    public function actualizar($anuncio) {
        return view('anuncios.actualizar');
    }
    public function eliminar($anuncio) {
        return view('anuncios.eliminar');
    }
}
