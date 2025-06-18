<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosContablesTable extends Migration
{
    public function up()
    {
        Schema::create('movimientos_contables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cuenta_contable_id')->constrained('cuentas_contables');
            $table->decimal('monto', 10, 2);
            $table->enum('tipo', ['debe', 'haber']);
            $table->string('descripcion')->nullable();

            // Polimórfica: puede apuntar a compras, ventas, etc.
            $table->unsignedBigInteger('movimiento_id');
            $table->string('movimiento_type');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movimientos_contables');
    }
}
