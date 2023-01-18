<?php

namespace App\Http\Controllers;

use App\Models\egreso;
use App\Models\detalle_ingreso;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreegresoRequest;
use App\Http\Requests\UpdateegresoRequest;

class EgresoController extends Controller
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
     * @param  \App\Http\Requests\StoreegresoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreegresoRequest $request)
    {

        $egreso = new egreso;
        $egreso->egre_fecha = $request->input('egre_fecha');
        $egreso->egre_centro_dist = $request->input('egre_centro_dist');
        $egreso->egre_farmacia_id = $request->input('egre_farmacia_id');
        $egreso->save();

        return response()->json($egreso, status:201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function show(egreso $egreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function edit(egreso $egreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateegresoRequest  $request
     * @param  \App\Models\egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateegresoRequest $request, egreso $egreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(egreso $egreso)
    {
        //
    }
}
