<?php

use Illuminate\Database\Seeder;
use Database\Seeders\TiposCuentaContableSeeder;
use Database\Seeders\ClasificacionesContablesSeeder;
use Database\Seeders\CuentasContablesSeeder;
use Database\Seeders\ProveedoresSeeder;
use Database\Seeders\ClientesSeeder;
use Database\Seeders\ProductosSeeder;
use Database\Seeders\ComprasSeeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            TiposCuentaContableSeeder::class,
            ClasificacionesContablesSeeder::class,
            CuentasContablesSeeder::class,
            ProveedoresSeeder::class,
            ClientesSeeder::class,
            ProductosSeeder::class,
            ComprasSeeder::class,
        ]);
    }


}
