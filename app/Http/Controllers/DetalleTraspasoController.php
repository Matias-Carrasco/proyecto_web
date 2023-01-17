<?php

namespace App\Http\Controllers;

use App\Models\detalle_traspaso;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storedetalle_traspasoRequest;
use App\Http\Requests\Updatedetalle_traspasoRequest;

class DetalleTraspasoController extends Controller
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
     * @param  \App\Http\Requests\Storedetalle_traspasoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetalle_traspasoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalle_traspaso  $detalle_traspaso
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_traspaso $detalle_traspaso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalle_traspaso  $detalle_traspaso
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle_traspaso $detalle_traspaso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetalle_traspasoRequest  $request
     * @param  \App\Models\detalle_traspaso  $detalle_traspaso
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetalle_traspasoRequest $request, detalle_traspaso $detalle_traspaso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalle_traspaso  $detalle_traspaso
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_traspaso $detalle_traspaso)
    {
        //
    }
}
