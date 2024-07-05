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
        Schema::create('pendientes', function (Blueprint $table) {
            $table->id('id_pendiente');
            $table->decimal('pen_monto', 10, 2);
            $table->date('pen_fecha');
            $table->string('pen_tipo_pendiente');
            $table->string('pen_tipo_objetivo');
            $table->integer('pen_duracion');
            $table->text('pen_descripcion')->nullable();
            $table->integer('pen_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendientes');
    }
};
