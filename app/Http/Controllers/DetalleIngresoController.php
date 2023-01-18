<?php

namespace App\Http\Controllers;

use App\Models\detalle_ingreso;
use App\Models\ingreso;
use App\Models\centro_distribucion;
use App\Models\stock_cd;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storedetalle_ingresoRequest;
use App\Http\Requests\Updatedetalle_ingresoRequest;

class DetalleIngresoController extends Controller
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
     * @param  \App\Http\Requests\Storedetalle_ingresoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetalle_ingresoRequest $request)
    {

        $id_ingre = $request->input('det_ingreso_id');

        $ingreso = ingreso::where('id',$id_ingre)->first();

        $centro = centro_distribucion::findorFail($ingreso->ingr_centro_dist);

        $stock_cd = new stock_cd;
        $stock_cd->scd_cantidad = $request->input('det_ing_cantidad');
        $stock_cd->scd_centro_dist = $centro->id;
        $stock_cd->scd_id_medicamento = $request->input('id_medicamento');
        $stock_cd->scd_lote = $request->input('det_ing_lote');
        $stock_cd->save();

        
        $detalle = new detalle_ingreso;
        $detalle->id_medicamento = $request->input('id_medicamento');
        $detalle->det_ingreso_id = $request->input('det_ingreso_id');
        $detalle->det_ing_cantidad = $request->input('det_ing_cantidad');
        $detalle->det_ing_lote = $request->input('det_ing_lote');
        $detalle->save();

        
        return response()->json($detalle, status:201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalle_ingreso  $detalle_ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_ingreso $detalle_ingreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalle_ingreso  $detalle_ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle_ingreso $detalle_ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetalle_ingresoRequest  $request
     * @param  \App\Models\detalle_ingreso  $detalle_ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetalle_ingresoRequest $request, detalle_ingreso $detalle_ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalle_ingreso  $detalle_ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_ingreso $detalle_ingreso)
    {
        //
    }
}
