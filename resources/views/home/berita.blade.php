@extends('layouts.landing2')
@section('main')
<div class="container ms-auto" style="margin-top: 120px">

    @include('home.search')

    <div class="mt-3 text-center">{!! $share !!}</div>
    <div class="row mt-5">
        <div class="col-lg-8">
            @if(!empty(request('search')) || !empty(request('bulan')))

                <div class="card shadow p-3">
                    @if(request('search'))
                        <div class="small">Search: {{ request('search') }}</div>
                    @else
                        <div class="small">Arsip: {{ request('bulan').' '.request('tahun') }}</div>
                    @endif
                    @foreach ($data as $d)
                        <div class="row mb-3">
                            <div class="col-4 pt-2">
                                <img class="img-thumbnail" src="{{ url('img/berita/'.$d->image)}}" alt="">
                            </div>
                            <div class="col-8 pl-1 pt-2">
                                <a href="{{ url('berita/'.$d->slug)}}" class="text-left" style="font-size: 18px">{{ $d->label }}</a>
                                <div class="text-muted " style="font-size: 12px">{{ $d->created_at->format('d F Y')}}, (DINSOS Prov. Gorontalo)</div>
                                <a href="{{ url('berita/'.$d->slug)}}" class="btn btn-custom mt-2" style="padding: 3px 15px; text-transform: capitalize">Baca lengkap</a>
                            </div>
                        </div>

                    @endforeach

                    {{ $data->links()}}
                </div>



            @else
                @if($data->count())
                    
                    
                
                <div class="row">
                    <div class="col-12 services-box mb-5">
                        <div class="p-1 card shadow">
                            <img width="100%"  src="{{url('img/berita/'.$data[0]->image)}}" alt="">
                            <div class="p-3">

                                <h4 class="pt-4">{{ $data[0]->label }}</h4>
                                <div class="text-muted">Posted, {{ $data[0]->created_at->diffForHumans()}} (DINSOS Prov. Gorontalo)</div>
                                <p class="text-gray pt-2">{!! Str::limit($data[0]->desc, 400, '...') !!}</p>

                                <a href="{{url('berita/'.$data[0]->slug)}}" class="btn btn-custom">Baca lengkap</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 h4 mb-3">Berita terkini</div>
                    @foreach ($data->slice(1) as $b)
                    <div class="col-md-4 mb-3 services-box">
                        <div class="card p-1 shadow h-100">
                            <img width="100%" src="{{url('img/berita/'.$b->image)}}" alt="">
                            <div class="p-2">
                                <a class="" href="{{url('berita/'.$b->slug)}}">
                                    <span style="font-size: 16px">{{ $b->label }}</span>
                                </a>
                                <div class="text-muted text-right small">Posted, {{ $b->created_at->diffForHumans()}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            @endif

        </div>
        <div class="col-lg-4">

            @include('home.berita_populer')
            @include('home.berita_arsip')

        </div>
    </div>
</div>
@endsection
