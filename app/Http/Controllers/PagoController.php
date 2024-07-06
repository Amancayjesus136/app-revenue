<?php

namespace App\Http\Controllers;

use App\Models\Deuda;
use App\Models\Pago;
use App\Http\Controllers\DataMigrationController;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with('deuda')
                     ->orderBy('created_at', 'asc')
                     ->orderBy('updated_at', 'asc')
                     ->paginate(5);

        return view('pagos.form-listado', compact('pagos'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if (!is_numeric($data['monto_pago']) || empty($data['monto_pago'])) {
            return back()->withErrors(['monto_pago' => 'El monto del pago es requerido y debe ser numérico.']);
        }

        $deuda = Deuda::find($data['id_deuda']);

        if (!$deuda) {
            return back()->withErrors(['id_deuda' => 'La deuda especificada no existe.']);
        }

        $deuda->deu_monto_deuda -= $data['monto_pago'];
        $deuda->save();

        Pago::create($data);

        // Instanciar el controlador DataMigrationController y llamar a migrateData()
        $migrationController = new DataMigrationController();
        $migrationController->migrateData();

        // Eliminar la deuda si deu_monto_deuda es 0.00
        if ($deuda->deu_monto_deuda <= 0.00) {
            $deuda->delete();
        }

        return redirect()->route('deudas.index')->with('success', 'Pago registrado correctamente.');
    }

}
