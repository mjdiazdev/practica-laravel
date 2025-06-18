<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            ['nombre' => 'Proveedor Uno', 'telefono' => '78945612', 'email' => 'uno@proveedor.com', 'direccion' => 'Calle A #123'],
            ['nombre' => 'Proveedor Dos', 'telefono' => '78945613', 'email' => 'dos@proveedor.com', 'direccion' => 'Calle B #456'],
        ]);
    }
}
