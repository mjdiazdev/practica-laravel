<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposCuentaContableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipos_cuenta_contable')->insert([
            ['nombre' => 'Activo', 'descripcion' => 'Bienes y derechos que posee la empresa'],
            ['nombre' => 'Pasivo', 'descripcion' => 'Obligaciones y deudas de la empresa'],
            ['nombre' => 'Capital', 'descripcion' => 'Aportes de los socios y utilidades retenidas'],
            ['nombre' => 'Ingreso', 'descripcion' => 'Entradas de recursos económicos'],
            ['nombre' => 'Egreso', 'descripcion' => 'Salidas o gastos de recursos económicos'],
        ]);
    }
}
