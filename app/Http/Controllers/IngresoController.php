<?php

namespace App\Http\Controllers;

use App\Models\ingreso;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreingresoRequest;
use App\Http\Requests\UpdateingresoRequest;
use App\Models\detalle_ingreso;

class IngresoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreingresoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreingresoRequest $request)
    {
        $this->validate($request, [
            'ingr_fecha' => 'required',
            'ingr_centro_dist' => 'required',
        ]);

        $ingreso = new ingreso;
        $ingreso->ingr_fecha = $request->input('ingr_fecha');
        $ingreso->ingr_centro_dist = $request->input('ingr_centro_dist');
        $ingreso->save();

        $det_ingreso = new detalle_ingreso;
        $det_ingreso->id_medicamento = $request->input('id_medicamento');
        $det_ingreso->det_ing_cantidad = $request->input('det_ing_cantidad');
        $det_ingreso->det_ing_lote = $request->input('');
        $det_ingreso->save();

        return response()->json("Guardado exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(ingreso $ingreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateingresoRequest  $request
     * @param  \App\Models\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateingresoRequest $request, ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingreso $ingreso)
    {
        //
    }
}
