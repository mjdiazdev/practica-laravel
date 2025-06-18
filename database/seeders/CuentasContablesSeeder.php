<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuentasContablesSeeder extends Seeder
{
    public function run()
    {
        DB::table('cuentas_contables')->insert([
            ['codigo' => '1.1.01', 'nombre' => 'Caja', 'tipo_cuenta_id' => 1, 'clasificacion_id' => 1],
            ['codigo' => '1.1.02', 'nombre' => 'Banco', 'tipo_cuenta_id' => 1, 'clasificacion_id' => 1],
            ['codigo' => '1.1.03', 'nombre' => 'Inventario de Productos', 'tipo_cuenta_id' => 1, 'clasificacion_id' => 1],
            ['codigo' => '2.1.01', 'nombre' => 'Cuentas por Pagar', 'tipo_cuenta_id' => 2, 'clasificacion_id' => 1],
            ['codigo' => '3.1.01', 'nombre' => 'Capital Social', 'tipo_cuenta_id' => 3, 'clasificacion_id' => 2],
            ['codigo' => '4.1.01', 'nombre' => 'Ventas', 'tipo_cuenta_id' => 4, 'clasificacion_id' => 5],
            ['codigo' => '5.1.01', 'nombre' => 'Compras', 'tipo_cuenta_id' => 5, 'clasificacion_id' => 5],
        ]);
    }
}
