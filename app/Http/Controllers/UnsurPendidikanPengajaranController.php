<?php

namespace App\Http\Controllers;

use App\Models\akumulasiPerhitungan;
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
        //
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
        

        // $input = $request->validate([
        //     'namaKegiatan' => 'string',
        //     'tempatInstansi'=> 'string',
        //     'sks' => 'string',
        //     'bukti' => 'required|file|mimes:jpeg,png,jpg,pdf,svg|max:2048',
        //     'jumlahkelas' => 'integer',
        //     'jumlahAngkaKredit' => 'decimal',
        //     'volumeDosen' => 'integer',
        //     'keteranganKegiatan' => 'integer',
        //     'idkomponen' => 'integer',
        //     'idPerhitungan'=> 'integer',
        //     'idjenispelaksanaan' => 'integer'
            
        // ]);
        // // 
        // $input['jumlahAngkaKredit'] = $request->jumlahAngkaKredit;

        $data = new unsurPendidikanPengajaran();

        $data->namaKegiatan = $request->namaKegiatan;
        $data->tempatInstansi = $request->tempatInstansi;
        $data->sks = $request->sks;
        $data->bukti = $request->bukti;
        $data->jumlahkelas = $request->jumlahkelas;
        $data->jumlahAngkaKredit = $request->kelasxvdosen;
        $data->volumeDosen = $request->volumeDosen;
        $data->keteranganKegiatan = $request->keteranganKegiatan;
        $data->idkomponen = $request->idkomponen;
        $data->idPerhitungan = $request->idPerhitungan;
        $data->idjenispelaksanaan = $request->idjenispelaksanaan;
        $data->save();

  
        if ($buktiunsurpdp = $request->file('bukti')) {
            $destinationPath = 'bukti/';
            $profileImage = date('YmdHis') . "." . $buktiunsurpdp->getClientOriginalExtension();
            $buktiunsurpdp->move($destinationPath, $profileImage);
            $input['bukti'] = "$profileImage";
        }



        session(['success_insert' => "Berhasil menambahkan data pasar"]);
        return redirect('/perhitungan');
        
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
