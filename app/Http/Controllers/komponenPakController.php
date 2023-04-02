<?php
namespace App\Http\Controllers;

use App\Models\komponenPak;
use App\Models\kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class komponenPakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $kategoris =kategori::where()->kategori_id == 1;
        $komponenpak = komponenPak::latest()->paginate(8)->withQueryString();
        return view('.komponen_pak.boardkomponenpak',[
            'komponenpak' => $komponenpak,] ,compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('.komponen_pak.createpak', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'komponen' => 'required|max:255',
            'kategori_id' => 'required',
            'batasmaxdiakui' => 'required|max:255',
            'score' => 'required|numeric',
        ]);

        $input['user_id'] = auth()->user()->id;

        komponenPak::create($input);

        return redirect()->route('komponenpak.index')->with('success', "Data berhasil ditambah");                
    }

    /**
     * Display the specified resource.
     */
    public function show(komponenPak $komponenpak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(komponenPak $komponenpak)
    {
        return view('.komponen_pak.editpak',[
            'komponenpak' => $komponenpak
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, komponenPak $komponenpak)
    {
        $this->validate($request, array(
            'komponen' => 'required|max:255',
            'kategori_id' => 'required',
            'batasmaxdiakui' => 'required|max:255',
            'score' => 'required|numeric',
        ));

        $komponenpak->komponen = $request['komponen'];
        $komponenpak->kategori = $request['kategori'];
        $komponenpak->batasmaxdiakui = $request['batasmaxdiakui'];
        $komponenpak->score = $request['score'];
        $komponenpak->save();



        return redirect()->route('komponenpak.index')->with('success', "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $komponenpak = komponenPak::findOrFail($id);
    //delete post
    $komponenpak->delete();

    return redirect()->route('komponenpak.index')->with('success', "Data berhasil dihapus");

}



}
