<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Populer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class _BeritaController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $search = '';
        if($request->search){
            $search = $request->search;
            $data = Berita::where('user_id', $id)->where('label','like', '%'.$search.'%')->orderbydesc('id')->paginate(10)->withQueryString();
        }else{
            $data = Berita::where('user_id', $id)->orderbydesc('id')->paginate(10)->withQueryString();
        }
        return view('bidang.berita.index', [
            'title' => 'Berita',
            'berita' => $data,
            'search' => $search

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bidang.berita.create', [
            'title' => 'Tambah Berita'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'label' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $nama_image = time().'.'.$request->image->extension();
        $valid['slug'] = Str::slug($request->label);
        $valid['image'] = $nama_image;
        $valid['user_id'] = Auth::user()->id;

        $request->image->move(public_path('img/berita'), $nama_image);

        if(Berita::create($valid))
            return redirect('bidang/beritas')->with('success','Baerhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');

    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        dd($berita);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {

        return view('bidang.berita.edit', [
            'title' => 'Edit Berita',
            'data' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $valid = $request->validate([
            'label' => 'required',
            'desc' => 'required',
        ]);
        if($request->label != $berita->label){
            $valid['slug'] = Str::slug($request->label);
        }
        if($request->image){
            $nama_image = time().'.'.$request->image->extension();
            $valid['image'] = $nama_image;
            $request->image->move(public_path('img/berita'), $nama_image);
        }
            $valid['user_id'] = Auth::user()->id;
        if(Berita::find($berita->id)->update($valid))
            return redirect('bidang/beritas')->with('success','Baerhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        if(Berita::destroy($berita->id)){
            if(file_exists(public_path('img/berita/'.$berita->image))){
               unlink(public_path('img/berita/'.$berita->image));
           }
           Populer::where('berita_id', $berita->id)->delete();
            return back()->with('error', 'Berita dihapus');
        }
        return back()->with('error', 'Gagal hapus');
    }}
