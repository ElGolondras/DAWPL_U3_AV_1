<?php

namespace App\Http\Controllers;

use App\Models\aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $aulas = aula::get();
        return view('aula.listado', compact('aulas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('aula.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        aula::create($request->all());
        return redirect()->route('aulas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(aula $aula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aula $aula)
    {
        //
        return view('aula.editar', compact('aula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, aula $aula)
    {
        //
        $aula->update($request->all());
        return to_route('aulas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aula $aula)
    {
        //
        $aula->delete();
        return to_route('aulas.index');
    }
}
