@extends('layouts.landing2')
@section('main')
<div class="container ms-auto" style="margin-top: 130px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if (request('show'))
                <li class="breadcrumb-item"><a class="btn btn-sm btn-custom" href="{{ url('layanan')}}">Back</a></li>
                <li class="breadcrumb-item active btn btn-sm" aria-current="page">{{ $layanan->nama }}</li>
            @else
              <li class="breadcrumb-item active btn-sm" style="font-weight: bold" aria-current="page">Layanan</li>
            @endif
        </ol>
      </nav>
    <div class="row mt-4" style="min-height: 700px">
        <div class="col-lg-12">
            <div class="row">
                @if (request('show'))
                        <div class="col-12 mb-4">
                            <h3>{{ $layanan->nama }}</h3>
                            <p>{{ $layanan->ket }}</p>
                            <a href="{{ url('img/layanan/'.$layanan->foto)}}" class="thumb shadow preview-thumb image-popup mt-0 p-2" title="{{ $layanan->nama}}">
                                <img src="{{ url('img/layanan/'.$layanan->foto)}}" class="thumb-img" alt="work-thumbnail">
                            </a>
                        </div>
                @else
                    @foreach ($layanan as $g)
                    <div class="col-md-3 mb-5">
                        <div class="card h-100 shadow p-1">
                            <img class="card-img-top img-fluid" style="max-height: 270px" src="{{ url('img/layanan/'.$g->foto)}}" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title mb-0">{{$g->nama}}</h5>
                                <div class="text-muted small mb-2">Posted,  {{ $g->created_at->format('d F Y')}}</div>
                                <div class="card-text @if(!empty($g->ket)) mb-3 @endif">{!! $g->ket !!} </div>

                                    <a href="{{url('layanan?show='.$g->id)}}" class="btn btn-custom btn-sm waves-effect waves-light">Buka</a>

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
