<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasificacionesContablesSeeder extends Seeder
{
    public function run()
    {
        DB::table('clasificaciones_contables')->insert([
            ['nombre' => 'Circulante', 'descripcion' => 'Activo o pasivo a corto plazo'],
            ['nombre' => 'No circulante', 'descripcion' => 'Activo o pasivo a largo plazo'],
            ['nombre' => 'Tangible', 'descripcion' => 'Activo físico'],
            ['nombre' => 'Intangible', 'descripcion' => 'Activo no físico'],
            ['nombre' => 'Operativo', 'descripcion' => 'Relacionado a la operación del negocio'],
            ['nombre' => 'No operativo', 'descripcion' => 'Fuera de la operación principal'],
        ]);
    }
}

