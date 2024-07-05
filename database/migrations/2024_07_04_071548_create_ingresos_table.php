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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('id_ingreso');
            $table->decimal('ing_monto', 10, 2);
            $table->date('ing_fecha');
            $table->string('ing_tipo_ingreso');
            $table->string('ing_tipo_donante');
            $table->string('ing_nombres')->nullable();
            $table->string('ing_apellidos')->nullable();
            $table->string('ing_correo')->nullable();
            $table->integer('ing_numero')->nullable();
            $table->text('ing_descripcion')->nullable();
            $table->integer('ing_estado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
