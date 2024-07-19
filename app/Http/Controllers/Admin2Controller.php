<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Bidang;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin2Controller extends Controller
{
    public function index(Request $request){

        if($request->semua)
            $data =  Aset::all();
        else
            $data = Aset::where('bidang_id', Auth::user()->bidang_id)->get();
        return view('bidang.index', [
            'title' => Auth::user()->bidang->nama,
            'data' => $data,
        ]);
    }

    public function print(Request $request){

        if($request->semua)
            $data =  Aset::all();
        else
            $data = Aset::where('bidang_id', Auth::user()->bidang_id)->get();
        return view('bidang.aset.print', [
            'title' => Auth::user()->bidang->nama,
            'data' => $data,
            'bidang' => Bidang::all(),
        ]);
    }
}
