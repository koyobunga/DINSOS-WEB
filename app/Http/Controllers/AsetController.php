<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Http\Requests\StoreAsetRequest;
use App\Http\Requests\UpdateAsetRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cek = Aset::where('bidang_id', Auth::user()->bidang_id)->orderbydesc('id')->first();
        if(!$cek){
            $kode = 'A.'.Auth::user()->bidang_id.'.0';
        }else{
            $ex = explode('.',$cek->kode);
            $kode = 'A.'.Auth::user()->bidang_id.'.'.$ex[2];
        }

        return view('bidang.aset.create', [
            'title' => 'Tambah Data Aset',
            'kode' => $kode,
            'item' => Item::orderby('nama', 'asc')->get(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $valid = $request->validate([
            'item_id' => 'required',
            'kode' => 'required',
            'merk' => 'required',
            'bapp' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'no_pol' => 'nullable',
            'no_mesin' => 'nullable',
            'no_rangka' => 'nullable',
            'foto' => 'nullable',
            'ket' => 'nullable',
        ]);
        
        if($request->foto){

            $foto = time().'.'.$request->foto->extension();
            $valid['foto'] = $foto;
            
            $request->foto->move(public_path('img/aset'), $foto);
        }
        
        $valid['user_id'] = Auth::user()->id;
        $valid['bidang_id'] = Auth::user()->bidang_id;
        
        if(Aset::create($valid))
            return redirect('bidang')->with('success','Berhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aset $aset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aset $aset)
    {
 
        return view('bidang.aset.edit', [
            'title' => 'Tambah Data Aset',
            'data' => $aset,
            'item' => Item::orderby('nama', 'asc')->get(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aset $aset)
    {
         // dd($request);
         $valid = $request->validate([
            'item_id' => 'required',
            'kode' => 'required',
            'merk' => 'required',
            'bapp' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'no_pol' => 'nullable',
            'no_mesin' => 'nullable',
            'no_rangka' => 'nullable',
            'foto' => 'nullable',
            'ket' => 'nullable',
        ]);
        
        if($request->foto){

            $foto = time().'.'.$request->foto->extension();
            $valid['foto'] = $foto;
            
            $request->foto->move(public_path('img/aset'), $foto);
        }
        
        
        if(Aset::find($aset->id)->update($valid))
            return redirect('bidang')->with('success','Data diperbarui ');
        return back()->with('error','Gagal memperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aset $aset)
    {
        if(Aset::destroy($aset->id)){
            if(file_exists(public_path('img/aset/'.$aset->foto))){
               unlink(public_path('img/aset/'.$aset->foto));
           }
        }
        return back()->with('error', 'Gagal hapus');
    }
}
