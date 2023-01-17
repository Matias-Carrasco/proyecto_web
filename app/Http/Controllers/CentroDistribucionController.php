<?php

namespace App\Http\Controllers;

use App\Models\centro_distribucion;
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
    public function show(centro_distribucion $centro_distribucion)
    {
        //
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
}
