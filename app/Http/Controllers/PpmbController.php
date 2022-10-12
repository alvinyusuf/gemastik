<?php

namespace App\Http\Controllers;

use App\Models\Ppmb;
use App\Models\University;
use App\Http\Requests\StorePpmbRequest;
use App\Http\Requests\UpdatePpmbRequest;

class PpmbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ppmb', [
            'title' => 'PPMB',
            'header' => true,
            'hero' => false,
            'ppmbs_trends' => University::all(),
            'ppmbs' => University::all()
        ]);
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
     * @param  \App\Http\Requests\StorePpmbRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePpmbRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppmb  $ppmb
     * @return \Illuminate\Http\Response
     */
    public function show(Ppmb $ppmb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppmb  $ppmb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppmb $ppmb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePpmbRequest  $request
     * @param  \App\Models\Ppmb  $ppmb
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePpmbRequest $request, Ppmb $ppmb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppmb  $ppmb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppmb $ppmb)
    {
        //
    }
}
