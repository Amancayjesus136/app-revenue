<?php

namespace App\Http\Controllers;

use App\Models\Pendiente;
use Illuminate\Http\Request;

class PendienteController extends Controller
{
    public function index()
    {
        $pendientes = Pendiente::all();
        $hideColumns = [
            'pen_monto' => $pendientes->every(fn($pendiente) => empty($pendiente->pen_monto)),
            'pen_fecha' => $pendientes->every(fn($pendiente) => empty($pendiente->pen_fecha)),
            'pen_tipo_pendiente' => $pendientes->every(fn($pendiente) => empty($pendiente->pen_tipo_pendiente)),
            'pen_tipo_objetivo' => $pendientes->every(fn($pendiente) => empty($pendiente->pen_tipo_objetivo)),
            'pen_duracion' => $pendientes->every(fn($pendiente) => empty($pendiente->pen_duracion)),
            'pen_descripcion' => $pendientes->every(fn($pendiente) => empty($pendiente->pen_descripcion)),
            'pen_estado' => $pendientes->every(fn($pendiente) => empty($pendiente->pen_estado)),
        ];
        return view('pendientes.principal-pendientes', compact('pendientes', 'hideColumns'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['pen_estado'] = $data['pen_estado'] ?? 1;

        $pendiente = Pendiente::create($data);

        if ($pendiente) {
            return redirect()->route('pendientes.index')->with('success', 'Pendiente creada correctamente');
        } else {
            return redirect()->back()->with('error', 'Hubo un problema al crear el pendiente');
        }
    }

    public function toggleEstado($id_pendiente)
    {
        $pendiente = Pendiente::findOrFail($id_pendiente);
        $pendiente->pen_estado = $pendiente->pen_estado == 1 ? 0 : 1;
        $pendiente->save();

        // Instanciar el controlador DataMigrationController y llamar a migrateData()
        $migrationController = new DataMigrationController();
        $migrationSuccessful = $migrationController->migrateData();

        if ($migrationSuccessful) {
            // Eliminar el registro de Pendiente después de la migración exitosa
            $pendiente->delete();
            return redirect()->route('pendientes.index')->with('success', 'Estado del pendiente actualizado y registro eliminado correctamente');
        } else {
            return redirect()->route('pendientes.index')->with('error', 'Error al migrar datos a MongoDB. No se eliminó el registro.');
        }
    }


}
