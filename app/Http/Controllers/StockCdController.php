<?php

namespace App\Http\Controllers;

use App\Models\stock_cd;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storestock_cdRequest;
use App\Http\Requests\Updatestock_cdRequest;

class StockCdController extends Controller
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
     * @param  \App\Http\Requests\Storestock_cdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storestock_cdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock_cd  $stock_cd
     * @return \Illuminate\Http\Response
     */
    public function show(stock_cd $stock_cd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock_cd  $stock_cd
     * @return \Illuminate\Http\Response
     */
    public function edit(stock_cd $stock_cd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatestock_cdRequest  $request
     * @param  \App\Models\stock_cd  $stock_cd
     * @return \Illuminate\Http\Response
     */
    public function update(Updatestock_cdRequest $request, stock_cd $stock_cd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock_cd  $stock_cd
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock_cd $stock_cd)
    {
        //
    }
}
