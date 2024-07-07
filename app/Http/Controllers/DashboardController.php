<?php

namespace App\Http\Controllers;

use App\Models\Calcular;
use App\Models\Deuda;
use App\Models\Eventos;
use App\Models\Ingresos;
use App\Models\mongodb\Pagos;
use App\Models\mongodb\pendientes;
use App\Models\Pago;
use App\Models\Pendiente;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalIngresos = Ingresos::sum('ing_monto');
        $totalPagadas = Pagos::count();

        $pendientesModel = new Pendientes();
        $pendientesCount = $pendientesModel->countWhere('pen_estado', 0);
        $totalPendientes = $pendientesModel->sumWhere('pen_estado', 1, 'pen_monto');

        $eventos = Eventos::all();
        $pendientesTotales = Pendiente::where('pen_estado', 1)->sum('pen_monto');
        $totalDeudas = Deuda::sum('deu_monto_deuda');
        $totalAhorrados = $totalIngresos - $totalPagadas;

        $deudas = Deuda::all();

        return view('dashboard', compact('totalIngresos', 'totalPendientes', 'pendientesTotales', 'eventos', 'totalDeudas', 'deudas', 'pendientesCount', 'totalPagadas', 'totalAhorrados'));
    }

    public function store(Request $request)
    {
        $montoIngreso = $request->monto_ingreso ?? 0;
        $montoDeuda = $request->monto_deuda ?? 0;
        $montoPendiente = $request->monto_pendiente ?? 0;
        $montoTotal = $montoIngreso - $montoDeuda - $montoPendiente;

        $ingreso = new Calcular();
        $ingreso->monto_ingreso = $montoIngreso;
        $ingreso->monto_deuda = $montoDeuda;
        $ingreso->monto_pendiente = $montoPendiente;
        $ingreso->monto_total = $montoTotal;

        if ($ingreso->save()) {
            return redirect()->route('dashboard')->with('success', 'Ingreso registrado correctamente.');
        } else {
            return redirect()->back()->with('error', 'Hubo un problema al registrar el ingreso.');
        }
    }

}
