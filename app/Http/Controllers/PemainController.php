<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use App\Http\Requests\StorePemainRequest;
use App\Http\Requests\UpdatePemainRequest;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemain=Pemain::all();
        return view('pemain.index',compact('pemain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePemainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemain $pemain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemain $pemain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePemainRequest $request, Pemain $pemain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemain $pemain)
    {
        //
    }
}
