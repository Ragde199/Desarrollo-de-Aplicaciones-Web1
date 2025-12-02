<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Muestra la lista de todos los productos
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos', ['productos' => $productos]);
    }
}
