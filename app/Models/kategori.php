<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'user_id',
        
    ];



    public function user(){
    return $this->belongTo(User::class);
    }

    public function komponen(){
        return $this->hasMany(komponenPak::class);
    }
}


