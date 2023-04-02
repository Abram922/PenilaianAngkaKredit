<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komponenPak extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'komponen',
        'kategori_id',
        'user_id',
        'score',
        'batasmaxdiakui',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function kategori(){
        return $this->belongsTo('App\Models\kategori', 'kategori_id', 'kategori_id');
    }
    public function unsurPendidikanPengajaran(){
        return $this->hasMany(unsurPendidikanPengajaran::class);
    }

    
}
