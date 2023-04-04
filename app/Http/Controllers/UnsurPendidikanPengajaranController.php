<?php

namespace App\Http\Controllers;

use App\Models\akumulasiPerhitungan;
use App\Models\pelaksanaanpdp;
use App\Models\unsurPendidikanPengajaran;
use App\Http\Controllers\Controller;
use App\Models\komponenPak;
use Illuminate\Http\Request;

class UnsurPendidikanPengajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('.pendidikandanpengajaran.index');
    }

    public function input(){
        $pelaksanaanpdps = pelaksanaanpdp::all();
        return view('.pendidikandanpengajaran.inputdatapengajaran',compact('pelaksanaanpdps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new unsurPendidikanPengajaran();
        $data->namaKegiatan = $request->namaKegiatan;
        $data->tempatInstansi = $request->tempatInstansi;
        $data->sks = $request->sks;
        $data->bukti = $request->bukti;
        $data->jumlahkelas = $request->jumlahkelas;
        $data->jumlahAngkaKredit = $request->kelasxvdosen;
        $data->volumeDosen = $request->volumeDosen;
        $data->keteranganKegiatan = $request->keteranganKegiatan;
        $data->idjenispelaksanaan = $request->idjenispelaksanaan;
        $data->save();

  
        if ($buktiunsurpdp = $request->file('bukti')) {
            $destinationPath = 'bukti/';
            $profileImage = date('YmdHis') . "." . $buktiunsurpdp->getClientOriginalExtension();
            $buktiunsurpdp->move($destinationPath, $profileImage);
            $input['bukti'] = "$profileImage";
        }



        session(['success_insert' => "Berhasil menambahkan data pasar"]);
        //return redirect()->route('');
        return view('.pendidikandanpengajaran.datapelaksanaanpendidikan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(unsurPendidikanPengajaran $unsurPendidikanPengajaran)
    {
        return view('perhitungan\pendidikandanpengajaran\detaildatapelaksanaanpengajaran', compact('unsurPendidikanPengajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(unsurPendidikanPengajaran $unsurPendidikanPengajaran)
    {
        return view('.perhitungan.pendidikandanpengajaran',[
            'unsurpendidikanpengajaran' =>  $unsurPendidikanPengajaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unsurPendidikanPengajaran $unsurPendidikanPengajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(unsurPendidikanPengajaran $unsurPendidikanPengajaran)
    {
        //
    }
}
