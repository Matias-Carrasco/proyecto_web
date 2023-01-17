<?php

namespace App\Http\Controllers;

use App\Models\egreso;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreegresoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreegresoRequest $request)
    {
        //
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
