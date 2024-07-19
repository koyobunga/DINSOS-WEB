<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Http\Requests\StoreBidangRequest;
use App\Http\Requests\UpdateBidangRequest;
use App\Models\Aset;
use App\Models\User;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Bidang::orderby('nama', 'desc')->get();
            return view('admin.bidang.index', [
                'title' => 'Bidang',
                'data' => $data
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
            'nama' => 'required'
        ]);
        if(Bidang::create($valid))
            return back()->with('success', 'Berhasil menambahkan');
        return back()->with('error', 'Gagal menambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bidang $bidang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bidang $bidang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bidang $bidang)
    {
        $valid = $request->validate([
            'id'=> 'required',
            'nama'=> 'required',
        ]);
        if(Bidang::where('id', $request->id)->update(['nama'=>$request->nama]))
            return back()->with('success', 'Data diperbarui');
        return back()->with('error', 'Data perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bidang $bidang)
    {
        if(User::where('bidang_id', $bidang->id)->count())
            return back()->with('error', 'Data ini terhubung dengan data User..');
        if(Aset::where('bidang_id', $bidang->id)->count())
            return back()->with('error', 'Data ini terhubung dengan data Aset..');
        if(Bidang::destroy($bidang->id)){
            return back()->with('error', 'Data dihapus');
        }
        return back()->with('error', 'Gagal menghapus');
    }
}
