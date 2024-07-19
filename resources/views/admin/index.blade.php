@extends('layouts.admin')

@section('main')

<div class="row">
    @foreach ($populer as $p)
    <div class="col-lg-4">
        <div class="card p-3" style="height: 120px">
            

                <div class="row">
                    <div class="col-4 pt-2 px-2">
                        <img class="rounded" width="100%" src="{{ url('img/berita/'.$p->berita->image)}}" alt="">
                    </div>
                    <div class="col-8 pl-0">
                        <a href="{{ url('berita/'.$p->berita->slug)}}" class="text-left" style="font-size: 15px">{{ Str::limit($p->berita->label, 50, '...') }}</a>
                        <div class="text-muted small mt-2 d-flex">
                                    <span>Read ({{ $p->jlh }})</span>
                            <span class="ml-auto">{{ $p->berita->created_at->diffForHumans()}}</span>
                        </div>
            </div>
    </div>
        </div>
    </div>
        <hr class="my-1">
    @endforeach
</div>


<div class="row mt-5">
    <div class="col-lg-8 pb-3">
        <div class="card p-3 h-100">
            <h5>Indeks Kepuasan Masyarakat</h5>
            <div class="d-flex mb-3 mt-3 mx-auto small justify-right">
                <span class="mt-1 mr-2">Filter: </span>
                <div class="">
                    <select class="form-control" id="tahun" style="font-size: 13px">
                        <option value="">Tahun</option>
                        @for($i = 0; $i < 4; $i++)
                        <option value="{{ date('Y')-$i }}">{{ date('Y')-$i }}</option>
                        @endfor    
                    </select>
                </div>
                <div class="pl-1">
             
                <select class="form-control" id="triwulan" style="font-size: 13px">
                    <option value="">Triwulan</option>
                    @for($i = 1; $i < 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor    
                </select>
                </div>
            </div>
            <canvas id="myChart" #chart></canvas>
            <div class=" mt-4 text-center" style="font-weight: 500; font-size: 13px" id="responden"></div>
        </div>
    </div>
    <div class="col-lg-4 pb-3">
        <div class="card p-3 h-100">
            <div class="mb-3 h5" style="font-weight: 500">Nilai Unsur Pelayanan</div>
            <table class="table">
                <tr class="bg-light" style="font-size: 13px">
                    <td class="py-1">Unsur</td>
                    <td class="py-1">IKM</td>
                    <td class="py-1">Kategori</td>
                    <td class="py-1">IKM Unit</td>
                </tr>
                <tbody id="tbody"></tbody>
            </table>
        </div>
    </div>
</div>



@endsection
