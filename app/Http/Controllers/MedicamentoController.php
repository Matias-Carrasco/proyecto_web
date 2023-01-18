<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoremedicamentoRequest;
use App\Http\Requests\UpdatemedicamentoRequest;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremedicamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremedicamentoRequest $request)
    {
        $this->validate($request, [
            'med_nombre' => 'required',
            'med_compuesto' => 'required',
        ]);

        $medicamento = new medicamento;
        $medicamento->med_nombre = $request->input('med_nombre');
        $medicamento->med_compuesto = $request->input('med_compuesto');
        $medicamento->save();

        return response()->json("Guardado exitosamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(medicamento $medicamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemedicamentoRequest  $request
     * @param  \App\Models\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemedicamentoRequest $request)
    {

        
        $this->validate($request, [
            'med_nombre' => 'required',
            'med_compuesto' => 'required'
        ]);
        
        $medicamento = medicamento::where('id', $request->input('id'))->first();
        if($medicamento == null) return response()->json("Medicamento no existe");

        $medicamento->med_nombre = $request->input('med_nombre');
        $medicamento->med_compuesto = $request->input('med_compuesto');
        
        $medicamento->save();
        return response()->json("Guardado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdatemedicamentoRequest $request)
    {
        $medicamento = medicamento::where('id', $request->input('id'))->first();
        $medicamento->delete();
        return;
    }
}
