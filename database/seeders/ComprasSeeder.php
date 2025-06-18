<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insertar compra
        $compraId = DB::table('compras')->insertGetId([
            'proveedor_id' => 1,
            'fecha' => now(),
            'total' => 100.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Insertar detalle
        DB::table('detalle_compras')->insert([
            ['compra_id' => $compraId, 'producto_id' => 1, 'cantidad' => 1, 'precio_unitario' => 50.00],
            ['compra_id' => $compraId, 'producto_id' => 2, 'cantidad' => 2, 'precio_unitario' => 25.00],
        ]);

        // Insertar movimientos contables (partida doble)
        DB::table('movimientos_contables')->insert([
            [
                'cuenta_contable_id' => 3, // Inventario
                'monto' => 100.00,
                'tipo' => 'debe',
                'movimiento_type' => 'App\Models\Compra',
                'movimiento_id' => $compraId,
                'descripcion' => 'Compra de productos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cuenta_contable_id' => 1, // Caja
                'monto' => 100.00,
                'tipo' => 'haber',
                'movimiento_type' => 'App\Models\Compra',
                'movimiento_id' => $compraId,
                'descripcion' => 'Pago de compra',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
