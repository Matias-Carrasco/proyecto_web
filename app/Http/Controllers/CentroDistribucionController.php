<?php

namespace App\Http\Controllers;

use App\Models\centro_distribucion;
use App\Models\stock_cd;
use App\Models\medicamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storecentro_distribucionRequest;
use App\Http\Requests\Updatecentro_distribucionRequest;

class CentroDistribucionController extends Controller
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
     * @param  \App\Http\Requests\Storecentro_distribucionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecentro_distribucionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\centro_distribucion  $centro_distribucion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centro = centro_distribucion::findorFail($id);
        $stock_cd = stock_cd::where('scd_centro_dist',$id)->get();

        $array_med = array();;
        foreach ($stock_cd as $sto){
            $nombre_med = medicamento::findorFail($sto->scd_id_medicamento);
            
            $array_med[] = [
                'id' => $sto->id,
                'scd_centro_dist' => $sto->scd_centro_dist,
                'medicamento_nombre' => $nombre_med->med_nombre,
                'cantidad' => $sto->scd_cantidad,
                'scd_lote' => $sto->scd_lote
            ];
        }

        return $array_med;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\centro_distribucion  $centro_distribucion
     * @return \Illuminate\Http\Response
     */
    public function edit(centro_distribucion $centro_distribucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecentro_distribucionRequest  $request
     * @param  \App\Models\centro_distribucion  $centro_distribucion
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecentro_distribucionRequest $request, centro_distribucion $centro_distribucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\centro_distribucion  $centro_distribucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(centro_distribucion $centro_distribucion)
    {
        //
    }

    public function stock(centro_distribucion $id){
        $centro = centro_distribucion::findorFail($id);
        $stock_cd = stock_cd::where('scd_centro_dist',$id)->get();

        return $stock_cd;


     

        
        
    }
}
