<?php

namespace App\Http\Controllers;

use App\Models\vehicleModel;
use App\Http\Requests\StorevehicleModelRequest;
use App\Http\Requests\UpdatevehicleModelRequest;

class VehicleModelController extends Controller
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
     * @param  \App\Http\Requests\StorevehicleModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevehicleModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function show(vehicleModel $vehicleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicleModel $vehicleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevehicleModelRequest  $request
     * @param  \App\Models\vehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevehicleModelRequest $request, vehicleModel $vehicleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicleModel $vehicleModel)
    {
        //
    }
}
