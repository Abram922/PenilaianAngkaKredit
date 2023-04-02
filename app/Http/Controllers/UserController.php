<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function halamanpak()
    {
        return view('.userterdaftar.boardpakuser');
    }

}
