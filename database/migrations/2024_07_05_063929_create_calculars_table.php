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
        Schema::create('calculars', function (Blueprint $table) {
            $table->id('id_calculo');
            $table->decimal('monto_ingreso', 10, 2);
            $table->decimal('monto_deuda', 10, 2);
            $table->decimal('monto_pendiente', 10, 2);
            $table->decimal('monto_total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculars');
    }
};
