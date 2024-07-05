<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Eventos::all();
        return view ('event.listado', compact('eventos'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $evento = Eventos::create($data);

        if ($evento) {
            return redirect()->route('dashboard')->with('success', 'Evento creada correctamente');
        } else {
            return redirect()->back()->with('error', 'Hubo un problema al crear evento');
        }
    }

}
