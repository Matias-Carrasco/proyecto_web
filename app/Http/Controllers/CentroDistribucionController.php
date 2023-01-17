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

        

        return $stock_cd;
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


        $stock_array = $stock_cd->toArray();
        $array_med;
        foreach ($stock_array as $sto){
            $nombre_med = medicamento::where('id',$sto->scd_id_medicamento)->pluck('med_nombre')->toArray();
            $data[] = [
                'nombre' => $label,
                'cantidad' => $budget->sum($label)
            ];
        }


        
        
    }
}
