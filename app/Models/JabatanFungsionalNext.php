<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanFungsionalNext extends Model
{
    use HasFactory;
    protected $fillable = [
        'jabatan',
        'angkaKreditKumulatif',
        'pelaksanaanPendidikan',
        'pelaksaanPenelitian',
        'pelaksanaanPengabdianMasyarakat',
        'penunjang'

    ];


    public function user(){
        return $this->hasMany(User::class);
    }
    public function akumulasiperhitungaxjbn(){
        return $this->hasMany(akumulasiPerhitungan::class);
    }

}
