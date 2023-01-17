<?php

namespace App\Http\Controllers;

use App\Models\detalle_egreso;
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
     * @param  \App\Http\Requests\Storedetalle_egresoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetalle_egresoRequest $request)
    {
        //
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
