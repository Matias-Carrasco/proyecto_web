<?php

namespace App\Http\Controllers;

use App\Models\detalle_ingreso;
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
        //
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
