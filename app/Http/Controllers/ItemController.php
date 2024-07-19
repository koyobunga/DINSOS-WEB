<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Aset;
use Illuminate\Http\Request;

class ItemController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama' => 'required',
        ]);
        if(Item::create($valid))
            return back()->with('success', 'Item telah ditambahkan..');
            return back()->with('error', 'Gagal menambahkan Item..');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        if(Aset::where('item_id', $item->id)->count())
            return back()->with('error', 'Tidak dapat menghapus, item terhubung ke data Aset..');
        if(Item::destroy($item->id))
            return back()->with('error', 'Item telah dihapus');
        return back()->with('error', 'Gagal menghapus..');
    }
}
