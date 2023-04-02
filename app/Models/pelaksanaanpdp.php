<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelaksanaanpdp extends Model
{
    use HasFactory;
   protected $fillabale = 
        [
            'jenispelaksanaan'
        ];

        public function unsurpdp(){
            return $this->hasMany(unsurPendidikanPengajaran::class);
        }

}
