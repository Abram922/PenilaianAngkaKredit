<?php

namespace App\Http\Controllers;

use App\Models\pendidikandanpengajaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendidikandanpengajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('.pendidikandanpengajaran.index');
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
    public function show(pendidikandanpengajaran $pendidikandanpengajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pendidikandanpengajaran $pendidikandanpengajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pendidikandanpengajaran $pendidikandanpengajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pendidikandanpengajaran $pendidikandanpengajaran)
    {
        //
    }
}
