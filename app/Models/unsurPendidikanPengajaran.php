<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unsurPendidikanPengajaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPerhitungan',
        'namaKegiatan',
        'idkomponen',
        'idjenispelaksanaan',
        'tempatInstansi',
        'sks',
        'jumlahkelas',
        'bukti',
        'angkaKredit',
        'jumlahAngkaKredit',
        'volumeDosen',
        'keteranganKegiatan'
    ];

    protected $guarded = ['id_pdp'];


    public function akumulasipendidikan(){
        return $this->belongsTo('App\Models\akumlasiPerhitungan', 'idPerhitungan', 'id');
    }

    public function komponen(){
        return $this->belongsTo('App\Models\komponenPak', 'idkomponen', 'id');
    }

    public function pelaksanaan(){
        return $this->belongsTo('App\Models\pelaksanaanpdp', 'idjenispelaksanaan', 'id');
    }
}