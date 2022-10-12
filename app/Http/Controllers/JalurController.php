<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use App\Http\Requests\StoreJalurRequest;
use App\Http\Requests\UpdateJalurRequest;

class JalurController extends Controller
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
     * @param  \App\Http\Requests\StoreJalurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJalurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jalur  $jalur
     * @return \Illuminate\Http\Response
     */
    public function show(Jalur $jalur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jalur  $jalur
     * @return \Illuminate\Http\Response
     */
    public function edit(Jalur $jalur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJalurRequest  $request
     * @param  \App\Models\Jalur  $jalur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJalurRequest $request, Jalur $jalur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jalur  $jalur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jalur $jalur)
    {
        //
    }
}
