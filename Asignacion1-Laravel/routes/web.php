<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta Estática de Bienvenida
Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);

// Ruta Dinámica de Saludo
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);
