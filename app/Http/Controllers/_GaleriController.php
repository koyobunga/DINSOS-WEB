<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Galeri_det;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class _GaleriController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $search = '';
        if($request->search){
            $search = $request->search;
            $data = Galeri::where('user_id', $id)->where('label','like', '%'.$search.'%')->orderbydesc('id')->paginate(10)->withQueryString();
        }else{
            $data = Galeri::where('user_id', $id)->orderbydesc('id')->paginate(10)->withQueryString();
        }
        return view('bidang.galeri.index', [
            'title' => 'Galeri Kegiatan',
            'data' => $data,
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
            'label' => 'required',
            'ket' => 'nullable',
        ]);
        $valid['user_id'] = Auth::user()->id;
        if(Galeri::create($valid))
            return back()->with('success', 'Berhasil menambahkan');
        return back()->with('error', 'Gagal menambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $valid = $request->validate([
            'id'=> 'required',
            'label'=> 'required',
            'ket'=> 'nullable',
        ]);
        if(Galeri::where('id', $request->id)->update(['label'=>$request->label]))
            return back()->with('success', 'Data diperbarui');
        return back()->with('error', 'Data perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        if(!$galeri->galeri_det->count()){
            if(Galeri::destroy($galeri->id)){
                Galeri_det::where('galeri_id', $galeri->id)->delete();
                return back()->with('info', 'Data dihapus');
            }
            return back()->with('error', 'Gagal menghapus');
        }
        return back()->with('error', 'Tidak dapat menghapus karena terkait dengan data lainnya..');
    }
}
