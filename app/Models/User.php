<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    public function komponen(){
        return $this->hasMany(komponenPak::class);
    }
    public function lampiran(){
        return $this->hasMany(Lampiran::class);
    }
    public function kategori(){
        return $this->hasMany(kategori::class);
    }

    public function jabatanfungsisonalpref(){
        return $this->belongsTo('App\Models\jabatanFungsionalPref','jabatan_pref', 'id_jabatan_pref');
    }
    public function jabatanfungsisonalnext(){
        return $this->belongsTo('App\Models\jabatanFungsionalPref','jabatan_next', 'id_jabatan_next');
    }
    
    public function akumulasiperhitungan(){
        return $this->hasMany(akumulasiPerhitungan::class);
    }

    public function userjabatan(){
        return $this->hasMany(userjabatan::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'judulkum',
        'jabatan_pref',
        'jabatan_next',
        'nip',
        'pendidikan_terakhir',
        'mata_kuliah_yang_diampu',
        'bidang_ilmu',
        'foto'



    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
