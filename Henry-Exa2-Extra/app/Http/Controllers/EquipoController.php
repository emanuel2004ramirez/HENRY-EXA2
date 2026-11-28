<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::orderBy('id')->get();
        return view('equipos.index', ['equipos' => $equipos]);
    }


    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'codigo' => ['required', 'string', 'max:30', 'unique:equipos,codigo'],
            'nombre' => ['required', 'string', 'max:100'],
            'marca' => ['required', 'string', 'max:80'],
            'fecha_adquisicion' => ['required', 'date', 'before_or_equal:today'],
            'estado' => ['required', 'in:disponible,asignado,mantenimiento'],
        ]);
        $equipo = new Equipo();
        $equipo->codigo = $datos['codigo'];
        $equipo->nombre = $datos['nombre'];
        $equipo->marca = $datos['marca'];
        $equipo->fecha_adquisicion = $datos['fecha_adquisicion'];
        $equipo->estado = $datos['estado'];
        $equipo->save();
        return redirect()->route('equipos.index')->with('exito', 'Equipo creado correctamente.');
    }
}
