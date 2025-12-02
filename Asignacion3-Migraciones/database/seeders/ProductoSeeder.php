<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Laptop HP Pavilion',
            'descripcion' => 'Laptop de alto rendimiento con procesador Intel Core i7, 16GB RAM y 512GB SSD.',
            'precio' => 899.99
        ]);

        Producto::create([
            'nombre' => 'Mouse Inalámbrico Logitech',
            'descripcion' => 'Mouse ergonómico inalámbrico con conexión Bluetooth y batería de larga duración.',
            'precio' => 29.99
        ]);

        Producto::create([
            'nombre' => 'Teclado Mecánico RGB',
            'descripcion' => 'Teclado mecánico gaming con iluminación RGB personalizable y switches Cherry MX.',
            'precio' => 79.99
        ]);

        Producto::create([
            'nombre' => 'Monitor Samsung 27"',
            'descripcion' => 'Monitor Full HD de 27 pulgadas con panel IPS y frecuencia de 75Hz.',
            'precio' => 249.99
        ]);

        Producto::create([
            'nombre' => 'Auriculares Sony WH-1000XM4',
            'descripcion' => 'Auriculares inalámbricos con cancelación de ruido activa y audio de alta resolución.',
            'precio' => 349.99
        ]);
    }
}
