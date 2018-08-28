<?php

namespace App\Http\Controllers;

use App\Cargos;
use Illuminate\Http\Request;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargos::paginate();

        return view('cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargos = Cargos::create($request->all());

        return redirect()->route('cargos.edit', $cargos->id)
            ->with('info','Cargo Guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function show(Cargos $cargos)
    {
        return view('cargos.show', compact('cargos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargos $cargos)
    {
        return view('cargos.edit', compact('cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargos $cargos)
    {
        $cargos->update($request->all());

        return redirect()->route('cargos.edit', $cargos->id)
            ->with('info','Cargo Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargos $cargos)
    {
        $cargos->delete();

        return back()->with('info','Eliminado Correctamente');
    }
}
