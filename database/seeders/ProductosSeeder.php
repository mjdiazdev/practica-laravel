<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'codigo' => 'P-0001',
                'nombre' => 'Filtro de aceite',
                'descripcion' => 'Filtro para motor',
                'precio_unitario' => 50.00,
                'precio_compra' => 40.00, // <--- nuevo campo
            ],
            [
                'codigo' => 'P-0002',
                'nombre' => 'Bujía',
                'descripcion' => 'Bujía de encendido',
                'precio_unitario' => 25.00,
                'precio_compra' => 18.00, // <--- nuevo campo
            ],
        ]);

    }
}
