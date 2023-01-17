<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoremedicamentoRequest;
use App\Http\Requests\UpdatemedicamentoRequest;

class MedicamentoController extends Controller
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
     * @param  \App\Http\Requests\StoremedicamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremedicamentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(medicamento $medicamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemedicamentoRequest  $request
     * @param  \App\Models\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemedicamentoRequest $request, medicamento $medicamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicamento $medicamento)
    {
        //
    }
}
