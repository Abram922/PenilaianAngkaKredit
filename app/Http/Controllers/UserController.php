<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\jabatan;
use App\Models\JabatanFungsionalNext;
use App\Models\JabatanFungsionalPref;
use Illuminate\Http\Request;

use App\Models\komponenPak;

class UserController extends Controller
{
    public function index()
    {

        $komponenpak = komponenPak::all();
        return view('.userterdaftar.index',[
            'komponenpak' => $komponenpak
        ]);
    }

    public function index2()
    {
        $komponenpak = komponenPak::all();
        $jbt = jabatan::all();
        return view('.perhitungan.halamanawal',[
            'komponenpak' => $komponenpak,
            'jbt' => $jbt,
        ]);
    }

    public function halamanpak()
    {
        return view('.userterdaftar.boardpakuser');
    }

}
