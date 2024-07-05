<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint; // Asegúrate de importar la clase correcta
use App\Models\Calcular;
use App\Models\Deuda;
use App\Models\Ingresos;
use App\Models\Pago;
use App\Models\Pendiente;
use MongoDB\Laravel\Schema\Blueprint as SchemaBlueprint;

class MigrateMongoDBTables extends Command
{
    protected $signature = 'mongodb:tables:migrate';
    protected $description = 'Migrar estructuras de tablas a MongoDB';

    public function handle()
    {
        $this->migrateCalculars();
        $this->migrateDeudas();
        $this->migrateIngresos();
        $this->migratePagos();
        $this->migratePendientes();
        $this->migrateEventos();

        $this->info('Migración de estructuras de tablas completada.');
    }

    protected function migrateCalculars()
    {
        Schema::connection('mongodb')->dropIfExists('calculars');
        Schema::connection('mongodb')->create('calculars', function (SchemaBlueprint $collection) {
            $collection->index('id_calculo');
            // Definir más índices si es necesario
        });
    }

    protected function migrateDeudas()
    {
        Schema::connection('mongodb')->dropIfExists('deudas');
        Schema::connection('mongodb')->create('deudas', function (SchemaBlueprint $collection) {
            $collection->index('id_deuda');
            // Definir más índices si es necesario
        });
    }

    protected function migrateIngresos()
    {
        Schema::connection('mongodb')->dropIfExists('ingresos');
        Schema::connection('mongodb')->create('ingresos', function (SchemaBlueprint $collection) {
            $collection->index('id_ingreso');
            // Definir más índices si es necesario
        });
    }

    protected function migratePagos()
    {
        Schema::connection('mongodb')->dropIfExists('pagos');
        Schema::connection('mongodb')->create('pagos', function (SchemaBlueprint $collection) {
            $collection->index('id_pago');
            // Definir más índices si es necesario
        });
    }

    protected function migratePendientes()
    {
        Schema::connection('mongodb')->dropIfExists('pendientes');
        Schema::connection('mongodb')->create('pendientes', function (SchemaBlueprint $collection) {
            $collection->index('id_pendiente');
            // Definir más índices si es necesario
        });
    }

    protected function migrateEventos()
    {
        Schema::connection('mongodb')->dropIfExists('eventos');
        Schema::connection('mongodb')->create('eventos', function (SchemaBlueprint $collection) {
            $collection->index('id_evento');
            // Definir más índices si es necesario
        });
    }
}
