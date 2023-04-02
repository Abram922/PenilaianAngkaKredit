<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    use HasFactory;
    protected $fillable = [
        'filename',
        'user_id',
        
    ];


    public function user(){
        return $this->belongTo(User::class);
    }
}
