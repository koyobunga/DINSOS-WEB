<?php

namespace App\Http\Controllers;

use App\Models\Publikasi_det;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiDetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Publikasi $publikasi)
    {
        
        return view('admin.publikasi.dok_detail',[
            'title' => 'Upload Dokumen Publik',
            'publikasi' => $publikasi,
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
            'publikasi_id' => 'required',
            'nama' => 'required',
            'ket' => 'nullable',
            'nm_file' => 'required',
        ]);

        $nm_file = time().'.'.$request->nm_file->extension();
        $valid['nm_file'] = $nm_file;

        $request->nm_file->move(public_path('dokumens/publikasi'), $nm_file);

        if(Publikasi_det::create($valid))
            return back()->with('success', 'Berhasil upload');
        return back()->with('error', 'Gagal upload');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publikasi_det $publikasi_det)
    {
        if(Publikasi_det::destroy($publikasi_det->id)){
            if(file_exists(public_path('dokumens/publikasi/'.$publikasi_det->nm_file))){
               unlink(public_path('dokumens/publikasi/'.$publikasi_det->nm_file));
           }
        return back()->with('error', 'publikasi dihapus');
        }
        return back()->with('error', 'Gagal hapus');
    }
}
