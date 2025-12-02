<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Muestra la página de bienvenida
     */
    public function bienvenida()
    {
        return view('bienvenida');
    }

    /**
     * Muestra un saludo personalizado con el nombre recibido
     */
    public function saludo($nombre)
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
