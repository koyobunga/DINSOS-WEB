<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use App\Http\Requests\StorePublikasiRequest;
use App\Http\Requests\UpdatePublikasiRequest;
use App\Models\Publikasi_det;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index(Request $request)
    {
        $search = '';
        if($request->search){
            $search = $request->search;
            $data = Publikasi::where('nama','like', '%'.$search.'%')->orderbydesc('id')->paginate(10)->withQueryString();
        }else{
            $data = Publikasi::orderbydesc('id')->paginate(10)->withQueryString();
        }
        return view('admin.Publikasi.index', [
            'title' => 'Publikasi',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama' => 'required'
        ]);
        if(Publikasi::create($valid))
            return back()->with('success', 'Berhasil menambahkan');
        return back()->with('error', 'Gagal menambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publikasi $publikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publikasi $publikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publikasi $publikasi)
    {
        $valid = $request->validate([
            'id'=> 'required',
            'nama'=> 'required',
        ]);
        if(Publikasi::where('id', $request->id)->update(['nama'=>$request->nama]))
            return back()->with('success', 'Data diperbarui');
        return back()->with('error', 'Data perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publikasi $publikasi)
    {
        if(Publikasi::destroy($publikasi->id)){
            Publikasi_det::where('publikasi_id', $publikasi->id)->delete();
            return back()->with('info', 'Data dihapus');
        }
        return back()->with('error', 'Gagal menghapus');
    }
}
