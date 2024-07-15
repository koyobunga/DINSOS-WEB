<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use App\Http\Requests\StoreAplikasiRequest;
use App\Http\Requests\UpdateAplikasiRequest;
use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = '';
        if($request->search){
            $search = $request->search;
            $data = Aplikasi::where('label','like', '%'.$search.'%')->orderbydesc('id')->paginate(10)->withQueryString();
        }else{
            $data = Aplikasi::orderbydesc('id')->paginate(10)->withQueryString();
        }
        return view('admin.aplikasi.index', [
            'title' => 'Aplikasi',
            'data' => $data,
            'search' => $search

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aplikasi.create', [
            'title' => 'Tambah Aplikasi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'label' => 'required',
            'ket' => 'required',
            'url' => 'required',
            'icon' => 'required',
        ]);

        $icon = time().'.'.$request->icon->extension();
        $valid['icon'] = $icon;
        $request->icon->move(public_path('img/aplikasi'), $icon);

        if(Aplikasi::create($valid))
            return redirect('admin/aplikasis')->with('success','Baerhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aplikasi $aplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aplikasi $aplikasi)
    {
        return view('admin.aplikasi.edit', [
            'title' => 'Edit aplikasi',
            'data' => $aplikasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aplikasi $aplikasi)
    {
        $valid = $request->validate([
            'label' => 'required',
            'ket' => 'required',
            'url' => 'required',
        ]);

        if($request->icon){
            $icon = time().'.'.$request->icon->extension();
            $valid['icon'] = $icon;
            $request->icon->move(public_path('img/aplikasi'), $icon);

            if(file_exists(public_path('img/aplikasi/'.$aplikasi->icon)))
                unlink(public_path('img/aplikasi/'.$aplikasi->icon));
        }

        if(Aplikasi::find($aplikasi->id)->update($valid))
            return redirect('admin/aplikasis')->with('success','Baerhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aplikasi $aplikasi)
    {
            if(Aplikasi::destroy($aplikasi->id)){
                if(file_exists(public_path('images/'.$aplikasi->icon))){
                    unlink(public_path('images/'.$aplikasi->icon));
                }
                return back()->with('info', 'Data dihapus');
            }
            return back()->with('error', 'Gagal menghapus');
    }
}
