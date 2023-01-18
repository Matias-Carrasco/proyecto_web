<?php

namespace App\Http\Controllers;

use App\Models\ingreso;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreingresoRequest;
use App\Http\Requests\UpdateingresoRequest;

class IngresoController extends Controller
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
     * @param  \App\Http\Requests\StoreingresoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreingresoRequest $request)
    {
        $ingreso = new ingreso;
        $ingreso->ingr_fecha = $request->input('ingr_fecha');
        $ingreso->ingr_centro_dist = $request->input('ingr_centro_dist');
        $ingreso->save();

        return response()->json($ingreso, status:201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(ingreso $ingreso)
    {  
  
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateingresoRequest  $request
     * @param  \App\Models\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateingresoRequest $request, ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingreso $ingreso)
    {
        //
    }
}
