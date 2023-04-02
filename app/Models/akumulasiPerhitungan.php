<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akumulasiPerhitungan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'jabatan_pref',
        'jabatan_next',
        'judul'
    ];


    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function jabtanfungsionalpref(){
        return $this->belongsTo('App\Models\jabatanFungsionalPref', 'jabatan_pref', 'id_jabatan_pref');
    }
    public function jabatanfungsionalnext(){
        return $this->belongsTo('App\Models\jabatanFungsionalNext', 'jabatan_next', 'id_jabatan_next');
    }
}
