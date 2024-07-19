<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Galeri_det;
use Illuminate\Http\Request;

class _GaleriDetController extends Controller
{
    public function index(Galeri $galeri)
    {
        return view('bidang.galeri.galeri_detail',[
            'title' => 'Upload Foto Kegiatan',
            'galeri' => $galeri,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'galeri_id' => 'required',
            'foto' => 'required',
        ]);

        $foto = time().'.'.$request->foto->extension();
        $valid['foto'] = $foto;

        $request->foto->move(public_path('img/galeri'), $foto);

        if(Galeri_det::create($valid))
            return back()->with('success', 'Berhasil upload');
        return back()->with('error', 'Gagal upload');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri_det $galeri_det)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri_det $galeri_det)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri_det $galeri_det)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri_det $galeri_det)
    {
        if(Galeri_det::destroy($galeri_det->id)){
            if(file_exists(public_path('img/galeri/'.$galeri_det->foto))){
               unlink(public_path('img/galeri/'.$galeri_det->foto));
           }
        return back()->with('error', 'Foto dihapus');
        }
        return back()->with('error', 'Gagal menghapus');
    }
}
