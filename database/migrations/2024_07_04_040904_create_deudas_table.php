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
        Schema::create('deudas', function (Blueprint $table) {
            $table->id('id_deuda');
            $table->decimal('deu_monto_deuda', 10, 2);
            $table->decimal('deu_monto_fijo', 10, 2);
            $table->date('deu_fecha_pagar');
            $table->string('deu_tipo_deuda');
            $table->string('deu_tipo_deudor');
            $table->string('deu_nombres')->nullable();
            $table->string('deu_apellidos')->nullable();
            $table->string('deu_correo')->nullable();
            $table->string('deu_numero')->nullable();
            $table->text('deu_descripcion')->nullable();
            $table->integer('deu_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deudas');
    }
};
