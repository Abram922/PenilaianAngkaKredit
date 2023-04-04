<?php

namespace App\Http\Controllers;

use App\Models\akumulasiPerhitungan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jabatanFungsionalPref;
use App\Models\jabatanFungsionalNext;
use App\Models\komponenPak;
use App\Models\pelaksanaanpdp;
use App\Models\unsurPendidikanPengajaran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class AkumulasiPerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->id;
        $jfp =jabatanFungsionalPref::all();
        $jfn =jabatanFungsionalNext::all();
        $akumulasiPerhitungan = akumulasiPerhitungan::where('user_id' , $user)->get();
       

        return view('.perhitungan.index',[
            'akumulasiPerhitungan' => $akumulasiPerhitungan,] ,compact('jfp', 'jfn','akumulasiPerhitungan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'jabatan_pref' => 'required',
            'jabatan_next'=> 'required',
            'judul' => 'required'
        ]);
        $input['user_id'] = auth()->user()->id;

        
 
        akumulasiPerhitungan::create($input);


        $data = new User();
        $data->judulkum = $request->judul;
        $data->save();

        return redirect()->route('perhitungan.index')->with('success', "Data berhasil ditambah");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $komponens =komponenPak::all();
        $pelaksanaanpdps = pelaksanaanpdp::all();
        $unsurpendidikandanpengajaran = unsurPendidikanPengajaran::where('idPerhitungan',$id)->get();
        return view('.perhitungan.aktifitasperhitungan',[
            'id'=>$id]
            ,compact('komponens','pelaksanaanpdps','unsurpendidikandanpengajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(akumulasiPerhitungan $akumulasiPerhitungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, akumulasiPerhitungan $akumulasiPerhitungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(akumulasiPerhitungan $akumulasiPerhitungan)
    {
        //
    }

    public function pengajaran()
    {

    }

    public function penelitian()
    {
        
    }

    public function pengabdianmasyarakat()
    {
        
    }

    public function penunjang()
    {
        
    }
}
