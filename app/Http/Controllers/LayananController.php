<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Layanan::paginate(10)->withQueryString();
        return view('admin.layanan.index', [
            'title' => 'Layanan',
            'data' =>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create',[
            'title' => 'Tambah Layanan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama' => 'required',
            'nama' => 'nullable',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $nama_image = time().'.'.$request->foto->extension();
        $valid['foto'] = $nama_image;

        $request->foto->move(public_path('img/layanan'), $nama_image);

        if(Layanan::create($valid))
            return redirect('admin/layanans')->with('success','Baerhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit', [
            'title' => 'Edit Layanan',
            'data' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $valid = $request->validate([
            'nama' => 'required',
            'ket' => 'nullable',
          
        ]);

        if($request->foto){
            $nama_image = time().'.'.$request->foto->extension();
            $valid['foto'] = $nama_image;
            $request->foto->move(public_path('img/layanan'), $nama_image);
            unlink(public_path('img/layanan/'.$layanan->foto));
        }

        if(Layanan::find($layanan->id)->update($valid))
            return redirect('admin/layanans')->with('success','Baerhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        if(Layanan::destroy($layanan->id)){
            if(file_exists(public_path('img/layanan/'.$layanan->foto))){
               unlink(public_path('img/layanan/'.$layanan->foto));
           }
            return back()->with('error', 'Dokumen dihapus');
        }
        return back()->with('error', 'Gagal hapus');
    }
}
