<?php

namespace App\Http\Controllers;

use App\Models\farmacia;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorefarmaciaRequest;
use App\Http\Requests\UpdatefarmaciaRequest;

class FarmaciaController extends Controller
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
     * @param  \App\Http\Requests\StorefarmaciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefarmaciaRequest $request)
    {
        $this->validate($request, [
            'farm_nombre' => 'required',
            'farm_direccion' => 'required',
            'farm_mail' => 'required'            
        ]);

        $farmacia = new farmacia();
        $farmacia->farm_nombre = $request->input('farm_nombre');
        $farmacia->farm_direccion = $request->input('farm_direccion');
        $farmacia->farm_mail = $request->input('farm_mail');
        $farmacia->save();

        return response()->json("Guardado exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function show(farmacia $farmacia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function edit(farmacia $farmacia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefarmaciaRequest  $request
     * @param  \App\Models\farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefarmaciaRequest $request)
    {
        $this->validate($request, [
            'farm_nombre' => 'required',
            'farm_direccion' => 'required',
            'farm_mail' => 'required'            
        ]);
        
        $farmacia = farmacia::where('id', $request->input('id'))->first();
        if($farmacia == null) return response()->json("Farmacia no existe");

        $farmacia->farm_nombre = $request->input('farm_nombre');
        $farmacia->farm_direccion = $request->input('farm_direccion');
        $farmacia->farm_mail = $request->input('farm_mail');
        
        $farmacia->save();
        return response()->json("Guardado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdatefarmaciaRequest $request)
    {
        $farmacia = farmacia::where('id', $request->input('id'))->first();
        $farmacia->delete();
        return;
    }
}
