@extends('layouts.landing2')
@section('main')
<div class="container ms-auto" style="margin-top: 130px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if (request('show'))
                <li class="breadcrumb-item"><a class="btn btn-sm btn-custom" href="{{ url('galeri')}}">Back</a></li>
                <li class="breadcrumb-item active btn btn-sm" aria-current="page">{{ $galeri->label }}</li>
            @else
              <li class="breadcrumb-item active btn-sm" style="font-weight: bold" aria-current="page">Galeri Kegiatan</li>
            @endif
        </ol>
      </nav>
    <div class="row mt-4" style="min-height: 700px">
        <div class="col-lg-12">
            <div class="row">
                @if (request('show'))
                    @foreach ($galeri->galeri_det as $g)
                        <div class="col-md-3 mb-4">
                            <a href="{{ url('img/galeri/'.$g->foto)}}" class="thumb shadow preview-thumb image-popup mt-0 p-2" title="{{ $galeri->label}}">
                                <img src="{{ url('img/galeri/'.$g->foto)}}" class="thumb-img" alt="work-thumbnail">
                            </a>
                        </div>
                    @endforeach
                @else
                    @foreach ($galeri as $g)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow">
                            <img class="card-img-top img-fluid" style="max-height: 270px" src="{{ url('img/galeri/'.$g->galeri_det[0]->foto)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{$g->label}}</h5>
                                <div class="text-muted small mb-2">Posted, {{ $g->created_at->format('d F Y')}}</div>
                                <div class="card-text @if(!empty($g->ket)) mb-2 @endif">{{ $g->ket }}</div>
                                <a href="{{url('galeri?show='.$g->id)}}" class="btn btn-custom btn-sm waves-effect waves-light">Buka</a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                @endif

            </div>
        </div>

    </div>
</div>
@endsection
