<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $equipos = equipo::all();
        return view('equipo.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'marca' => 'required',
            'fecha_adquisicion' => 'required',
            'estado' => 'required',
        ]);
        Equipo::create($request->all());
        return redirect()->route('equipos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(equipo $equipo)
    {
        //
    }
}
