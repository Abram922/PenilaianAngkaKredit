<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanFungsionalPref extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'jabatan',
        'angkaKreditKumulatif',
        'pelaksanaanPendidikan',
        'pelaksaanPenelitian',
        'pelaksanaanPengabdianMasyarakat',
        'penunjang'

    ];


    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function akumulasiperhitunganxjbf(){
        return $this->hasMany(akumulasiPerhitungan::class);
    }
}
