<?php

namespace App\Http\Controllers;

use App\Models\Lampiran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LampiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lampiran = Lampiran::all();
        return view('.userterdaftar.lampiran.index',[
            'lampiran' => $lampiran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('.userterdaftar.lampiran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'filename' => 'required|file|mimes:jpeg,png,jpg,pdf,svg|max:2048',
        ]);

        $input['user_id'] = auth()->user()->id;
       
        if ($image = $request->file('filename')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }

        Lampiran::create($input);

        return redirect()->route('lampiran.index')->with('success', 'Data berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Lampiran $lampiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lampiran $lampiran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lampiran $lampiran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lampiran = Lampiran::findOrFail($id);
    //delete post
        $lampiran->delete();

        return redirect()->route('lampiran.index')->with('success', "Data berhasil dihapus");

    }
}
