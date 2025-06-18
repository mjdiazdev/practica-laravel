<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('clientes')->insert([
            ['nombre' => 'Cliente Uno', 'telefono' => '78912345', 'email' => 'uno@cliente.com', 'direccion' => 'Zona Sur'],
            ['nombre' => 'Cliente Dos', 'telefono' => '78912346', 'email' => 'dos@cliente.com', 'direccion' => 'Zona Norte'],
        ]);
    }
}
