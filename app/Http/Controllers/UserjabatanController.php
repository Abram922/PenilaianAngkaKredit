<?php

namespace App\Http\Controllers;

use App\Models\userjabatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserjabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('.userterdaftar.menuperhitungan');
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
        $input = $request->validate([
            'id_jabatan_sekarang' => 'required',
            'id_jabatan_dituju'=> 'required'
        ]);
        $input['id_user'] = auth()->user()->id;

        

        userjabatan::create($input);

        return redirect()->route('user.home');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id    = DB::table('userjabatans')
                ->where('id_user', auth()->user()->id)
                ->select('userjabatans.id')
                ->get();

                return view('.perhitungan.aktifitasperhitungan',[
                ]);
        
 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userjabatan $userjabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, userjabatan $userjabatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userjabatan $userjabatan)
    {
        //
    }
}
