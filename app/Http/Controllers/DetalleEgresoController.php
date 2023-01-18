<?php

namespace App\Http\Controllers;

use App\Models\detalle_egreso;
use App\Models\egreso;
use App\Models\centro_distribucion;
use App\Models\stock_cd;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storedetalle_egresoRequest;
use App\Http\Requests\Updatedetalle_egresoRequest;

class DetalleEgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Http\Requests\Storedetalle_egresoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetalle_egresoRequest $request)
    {
        
        $id_egres = $request->input('det_egreso_id');

        $egreso = egreso::where('id',$id_egres)->first();

        $centro = centro_distribucion::findorFail($egreso->egre_centro_dist);

        $stock = stock_cd::where('scd_centro_dist',$centro->id)->get();
      

        $array_med = array();
        foreach ($stock as $sto){
            if($sto->scd_lote == $request->input('det_egr_lote')){
                $stock_cd = stock_cd::findorFail($sto->id);
                $stock_cd->scd_cantidad = ($stock_cd->scd_cantidad-$request->input('det_egr_cantidad'));
                $stock_cd->save();
            }
        }
        
        $detalle = new detalle_egreso;
        $detalle->id_medicamento = $request->input('id_medicamento');
        $detalle->det_egreso_id = $request->input('det_egreso_id');
        $detalle->det_egr_cantidad = $request->input('det_egr_cantidad');
        $detalle->det_egr_lote = $request->input('det_egr_lote');
        $detalle->save();

        return response()->json($detalle, status:201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalle_egreso  $detalle_egreso
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_egreso $detalle_egreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalle_egreso  $detalle_egreso
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle_egreso $detalle_egreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetalle_egresoRequest  $request
     * @param  \App\Models\detalle_egreso  $detalle_egreso
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetalle_egresoRequest $request, detalle_egreso $detalle_egreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalle_egreso  $detalle_egreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_egreso $detalle_egreso)
    {
        //
    }
}
