<?php

namespace App\Http\Controllers;

use App\Models\profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profesores = profesor::get();
        return view('profesor.listado', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('profesor.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        profesor::create($request->all());
        return redirect()->route('profesores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(profesor $profesor)
    {
        //
        return view('profesor.editar', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, profesor $profesor)
    {
        //
        $profesor->update($request->all());
        return to_route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profesor $profesor)
    {
        //
        $profesor->delete();
        return to_route('profesores.index');
    }
}
