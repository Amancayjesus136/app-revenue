<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Calcular;
use App\Models\Deuda;
use App\Models\Ingresos;
use App\Models\Pago;
use App\Models\Pendiente;
use App\Models\Eventos;

class MigrateDataToMongoDB extends Command
{
    protected $signature = 'data:migrate';
    protected $description = 'Migrar datos de PostgreSQL a MongoDB';

    public function handle()
    {
        // Migrar datos de PostgreSQL a MongoDB
        $this->migrarCalculars();
        $this->migrarDeudas();
        $this->migrarIngresos();
        $this->migrarPagos();
        $this->migrarPendientes();
        $this->migrarEventos();

        $this->info('Migración de datos completada exitosamente.');
    }

    protected function migrarCalculars()
    {
        $calculars = Calcular::all();

        foreach ($calculars as $calcular) {
            DB::connection('mongodb')->collection('calculars')->updateOrInsert(
                ['id_calculo' => $calcular->id_calculo],
                [
                    'id_calculo' => $calcular->id_calculo,
                    'monto_ingreso' => $calcular->monto_ingreso,
                    'monto_deuda' => $calcular->monto_deuda,
                    'monto_pendiente' => $calcular->monto_pendiente,
                    'monto_total' => $calcular->monto_total,
                ]
            );

            $this->info('Migrado Calcular: ' . $calcular->id_calculo);
        }
    }

    protected function migrarDeudas()
    {
        $deudas = Deuda::all();

        foreach ($deudas as $deuda) {
            DB::connection('mongodb')->collection('deudas')->updateOrInsert(
                ['id_deuda' => $deuda->id_deuda],
                [
                    'id_deuda' => $deuda->id_deuda,
                    'deu_monto_deuda' => $deuda->deu_monto_deuda,
                    'deu_monto_fijo' => $deuda->deu_monto_fijo,
                    'deu_fecha_pagar' => $deuda->deu_fecha_pagar,
                    'deu_tipo_deuda' => $deuda->deu_tipo_deuda,
                    'deu_tipo_deudor' => $deuda->deu_tipo_deudor,
                    'deu_nombres' => $deuda->deu_nombres,
                    'deu_apellidos' => $deuda->deu_apellidos,
                    'deu_correo' => $deuda->deu_correo,
                    'deu_numero' => $deuda->deu_numero,
                    'deu_descripcion' => $deuda->deu_descripcion,
                    'deu_estado' => $deuda->deu_estado,
                ]
            );

            $this->info('Migrada Deuda: ' . $deuda->id_deuda);
        }
    }

    protected function migrarIngresos()
    {
        $ingresos = Ingresos::all();

        foreach ($ingresos as $ingreso) {
            DB::connection('mongodb')->collection('ingresos')->updateOrInsert(
                ['id_ingreso' => $ingreso->id_ingreso],
                [
                    'id_ingreso' => $ingreso->id_ingreso,
                    'ing_monto' => $ingreso->ing_monto,
                    'ing_fecha' => $ingreso->ing_fecha,
                    'ing_tipo_ingreso' => $ingreso->ing_tipo_ingreso,
                    'ing_tipo_donante' => $ingreso->ing_tipo_donante,
                    'ing_nombres' => $ingreso->ing_nombres,
                    'ing_apellidos' => $ingreso->ing_apellidos,
                    'ing_correo' => $ingreso->ing_correo,
                    'ing_numero' => $ingreso->ing_numero,
                    'ing_descripcion' => $ingreso->ing_descripcion,
                    'ing_estado' => $ingreso->ing_estado,
                ]
            );

            $this->info('Migrado Ingreso: ' . $ingreso->id_ingreso);
        }
    }

    protected function migrarPagos()
    {
        $pagos = Pago::all();

        foreach ($pagos as $pago) {
            DB::connection('mongodb')->collection('pagos')->updateOrInsert(
                ['id_pago' => $pago->id_pago],
                [
                    'id_pago' => $pago->id_pago,
                    'id_deuda' => $pago->id_deuda,
                    'monto_pago' => $pago->monto_pago,
                ]
            );

            $this->info('Migrado Pago: ' . $pago->id_pago);
        }
    }

    protected function migrarPendientes()
    {
        $pendientes = Pendiente::all();

        foreach ($pendientes as $pendiente) {
            DB::connection('mongodb')->collection('pendientes')->updateOrInsert(
                ['id_pendiente' => $pendiente->id_pendiente],
                [
                    'id_pendiente' => $pendiente->id_pendiente,
                    'pen_monto' => $pendiente->pen_monto,
                    'pen_fecha' => $pendiente->pen_fecha,
                    'pen_tipo_pendiente' => $pendiente->pen_tipo_pendiente,
                    'pen_tipo_objetivo' => $pendiente->pen_tipo_objetivo,
                    'pen_duracion' => $pendiente->pen_duracion,
                    'pen_descripcion' => $pendiente->pen_descripcion,
                    'pen_estado' => $pendiente->pen_estado,
                ]
            );

            $this->info('Migrado Pendiente: ' . $pendiente->id_pendiente);
        }
    }

    protected function migrarEventos()
    {
        $eventos = Eventos::all();

        foreach ($eventos as $evento) {
            DB::connection('mongodb')->collection('eventos')->updateOrInsert(
                ['id_pendiente' => $evento->id_evento],
                [
                    'id_evento' => $evento->id_evento,
                    'evento' => $evento->evento,
                    'objeto_evento' => $evento->objeto_evento,
                    'fecha_evento' => $evento->fecha_evento,
                    'descripcion_evento' => $evento->descripcion_evento,
                ]
            );

            $this->info('Migrado Evento: ' . $evento->id_pendiente);
        }
    }
}
