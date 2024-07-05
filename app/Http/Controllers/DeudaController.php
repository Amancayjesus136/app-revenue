<?php

namespace App\Http\Controllers;

use App\Models\Deuda;
use App\Models\Pago;
use Illuminate\Http\Request;

class DeudaController extends Controller
{
    public function index()
    {
        $deudas = Deuda::with('pagos')->get();
        $totalPagados = Pago::count();
        $hideColumns = [
            'deu_monto_deuda' => $deudas->every(fn($deuda) => empty($deuda->deu_monto_deuda)),
            'deu_monto_fijo' => $deudas->every(fn($deuda) => empty($deuda->deu_monto_fijo)),
            'deu_fecha_pagar' => $deudas->every(fn($deuda) => empty($deuda->deu_fecha_pagar)),
            'deu_tipo_deuda' => $deudas->every(fn($deuda) => empty($deuda->deu_tipo_deuda)),
            'deu_tipo_deudor' => $deudas->every(fn($deuda) => empty($deuda->deu_tipo_deudor)),
            'deu_nombres' => $deudas->every(fn($deuda) => empty($deuda->deu_nombres)),
            'deu_apellidos' => $deudas->every(fn($deuda) => empty($deuda->deu_apellidos)),
            'deu_correo' => $deudas->every(fn($deuda) => empty($deuda->deu_correo)),
            'deu_numero' => $deudas->every(fn($deuda) => empty($deuda->deu_numero)),
            'deu_descripcion' => $deudas->every(fn($deuda) => empty($deuda->deu_descripcion)),
        ];

        return view('deudas.principal-deudas', compact('deudas', 'hideColumns', 'totalPagados'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['deu_estado'] = $data['deu_estado'] ?? 1;
        $data['deu_monto_fijo'] = $data['deu_monto_deuda'];

        $deuda = Deuda::create($data);

        if ($deuda) {
            return redirect()->route('deudas.index')->with('success', 'Inscripción creada correctamente');
        } else {
            return redirect()->back()->with('error', 'Hubo un problema al crear la inscripción');
        }
    }

    public function show($id_deuda)
    {
        $deuda = Deuda::with('pagos')->findOrFail($id_deuda);
        return view('deudas.partials.factura', compact('deuda'));
    }
}
