<?php

namespace App\Http\Controllers;

use App\Models\OPD;
use Illuminate\Http\Request;

class OPDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('opds.index', []);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OPD $oPD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OPD $oPD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OPD $oPD)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OPD $oPD)
    {
        //
    }
}
