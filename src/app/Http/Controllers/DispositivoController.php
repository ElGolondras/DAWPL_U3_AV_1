<?php

namespace App\Http\Controllers;

use App\Models\dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dispositivos = dispositivo::get();
        return view('dispositivo.listado', compact('dispositivos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dispositivo.crear');
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
    public function edit(dispositivo $dispositivo)
    {
        //
        return view('dispositivo.editar', compact('dispositivo'));
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
    public function destroy(dispositivo $dispositivo)
    {
        //
        $dispositivo->delete();
        return to_route('dispositivos.index');
    }
}
