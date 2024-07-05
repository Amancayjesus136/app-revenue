<?php

namespace App\Http\Controllers;

use App\Models\Ingresos;
use Illuminate\Http\Request;

class IngresosController extends Controller
{
    public function index()
    {
        $ingresos = Ingresos::all();
        $hideColumns = [
            'ing_monto' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_monto)),
            'ing_fecha' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_fecha)),
            'ing_tipo_ingreso' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_tipo_ingreso)),
            'ing_tipo_donante' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_tipo_donante)),
            'ing_nombres' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_nombres)),
            'ing_apellidos' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_apellidos)),
            'ing_correo' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_correo)),
            'ing_numero' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_numero)),
            'ing_descripcion' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_descripcion)),
            'ing_estado' => $ingresos->every(fn($ingreso) => empty($ingreso->ing_estado)),
        ];
        return view('ingresos.principal-ingresos', compact('ingresos', 'hideColumns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['ing_estado'] = $data['ing_estado'] ?? 1;

        $ingreso = Ingresos::create($data);

        if ($ingreso) {
            return redirect()->route('ingresos.index')->with('success', 'Ingreso creada correctamente');
        } else {
            return redirect()->back()->with('error', 'Hubo un problema al crear el ingreso');
        }
    }

}
