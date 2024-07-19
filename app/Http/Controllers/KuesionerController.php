<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use App\Http\Requests\StoreKuesionerRequest;
use App\Http\Requests\UpdateKuesionerRequest;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ikm_load(Request $request)
    {
        $tahun = date('Y');
        $tw = 1;
        if($request->tahun)
            $tahun = $request->tahun;
        if($request->triwulan)
            $tw = $request->triwulan;

        $label = ['u1','u2','u3','u4','u5','u6','u7','u8','u9'];

        if($tw == 1){
            $start = 1;
            $end = 3;
        }
        if($tw == 2){
            $start = 4;
            $end = 6;
        }
        if($tw == 3){
            $start = 7;
            $end = 9;
        }
        if($tw == 4){
            $start = 10;
            $end = 12;
        }
            
        if($request->tahun){
            $get = Kuesioner::whereYear('created_at', $tahun)->get();
            if($request->triwulan)
                $get = Kuesioner::whereYear('created_at', $tahun)->whereMonth('created_at', '>=', $start )
                ->whereMonth('created_at', '<=', $end)->get();
        }else{
            $get = Kuesioner::whereYear('created_at', $tahun)->get();
        }
  

        $value = [0,0,0,0,0,0,0,0,0];
        $kategori = ['-','-','-','-','-','-','-','-','-'];
        $unit =0;
        if($get->count()){
            for ($i=0; $i < 9; $i++) { 
                $value[$i] = $get->sum('u'.$i+1)/$get->count();
                if($value[$i]<=4){
                    $kategori[$i] = "A";
                }
                if($value[$i]<3.5){
                    $kategori[$i] = "B";
                }
                if($value[$i]<3){
                    $kategori[$i] = "C";
                }
                if($value[$i]<2.6){
                    $kategori[$i] = "D";
                }

                $unit += $value[$i];
            }
        }

        if(($unit/9)<=4){
            $ket = "Sangat baik";
            $huruf = "A";
        }
        if(($unit/9)<3.5324){
            $ket = "Baik";
            $huruf = "B";
        }
        if(($unit/9)<3.0644){
            $ket = "Kurang baik";
            $huruf = "C";
        }
        if(($unit/9)<2.6){
            $ket = "Tidak baik";
            $huruf = "D";
        }


        $data = [
            'labels' => $label,
            'value' => $value,
            'kategori' => $kategori,
            'ket' => $ket,
            'huruf' => $huruf,
            'unit' => number_format($unit/(4*9)*100, 2),
            'responden' => $get->count(),
            'tahun' => $tahun,
            'triwulan' => $tw,
        ];
        return response()->json(['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama' => 'required',
            'usia' => 'required',
            'jenkel' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'u1' => 'required',
            'u2' => 'required',
            'u3' => 'required',
            'u4' => 'required',
            'u5' => 'required',
            'u6' => 'required',
            'u7' => 'required',
            'u8' => 'required',
            'u9' => 'required',
            'saran' => 'required',
        ]);

        if(Kuesioner::create($valid))
            return redirect('/')->with('kue_success', 'Respon telah dikirim ..');
        return back()->with('kue_error', 'Gagal mengirim ..');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kuesioner $kuesioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuesioner $kuesioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKuesionerRequest $request, Kuesioner $kuesioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuesioner $kuesioner)
    {
        //
    }
}
