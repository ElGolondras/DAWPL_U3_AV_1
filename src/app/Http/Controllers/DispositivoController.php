<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;
use App\Models\Aula;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dispositivos = Dispositivo::with('aula')->get();
        return view('dispositivos.listadodisp', compact('dispositivos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $aulas = Aula::all(); 
        return view('dispositivos.altadisp', compact('aulas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        dispositivo::create($request->all());
        return redirect()->route('dispositivos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(dispositivo $dispositivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dispositivo $dispositivo)
    {
        $aulas = \App\Models\Aula::all(); 
        return view('dispositivos.editardisp', compact('dispositivo', 'aulas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dispositivo $dispositivo)
    {
        //
        $dispositivo->update($request->all());
        return to_route('dispositivos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete(Dispositivo $dispositivo)
    {
        // Esto cargará tu archivo resources/views/eliminardisp.blade.php
        return view('eliminardisp', compact('dispositivo'));
    }

    public function destroy(Dispositivo $dispositivo)
    {
        $dispositivo->delete();
        return redirect()->route('dispositivos.index');
    }
}
