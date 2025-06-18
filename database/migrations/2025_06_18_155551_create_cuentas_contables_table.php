<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuentas_contables', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Ej: 1.1.01
            $table->string('nombre');
            $table->foreignId('tipo_cuenta_id')->constrained('tipos_cuenta_contable');
            $table->foreignId('clasificacion_id')->nullable()->constrained('clasificaciones_contables');
            $table->foreignId('cuenta_padre_id')->nullable()->constrained('cuentas_contables');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas_contables');
    }
};
