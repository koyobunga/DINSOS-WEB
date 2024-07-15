@extends('layouts.landing2')
@section('main')
<div class="container ms-auto" style="margin-top: 120px">

    @include('home.search')


    <div class="text-muted mt-5 small">
        Show: {{ $data->label}}
    </div>
    <div class="row">
        <div class="col-lg-8">
                <div class="services-box mb-5">
                    <div class="p-1 card shadow">
                        <img width="100%"  src="{{url('img/berita/'.$data->image)}}" alt="">
                        <div class="p-4">
                            <h3 class="pt-3">{{ $data->label }}</h3>
                            <div class="text-muted small">Posted, {{ $data->created_at->diffForHumans()}} (DINSOS Prov. Gorontalo)</div>
                            <div class="mt-3" style="margin-left: -20px;">{!! $share !!}</div>
                            <p class="pt-2" style="font-size: 16px">{!! $data->desc !!}</p>
                        </div>
                    </div>
                </div>

        </div>

        <div class="col-lg-4">

            @include('home.berita_populer')
            @include('home.berita_arsip')

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 px-4">
            <div class="h4 mb-3 text-center">Berita terkini</div>
            <div class="row">
                @foreach ($terkini as $b)

                <div class="col-lg-3 mb-2 px-2 services-box">
                    <div class="card shadow p-1 h-100">
                        <img width="100%" style="height: 200px;" src="{{url('img/berita/'.$b->image)}}" alt="">
                        <div class="p-2">
                            <a class="text-primary" href="{{url('berita/'.$b->slug)}}">
                                <span style="font-size: 16px">{{ $b->label }}</span>
                            </a>
                            <div class="text-muted text-right small">Posted, {{ $b->created_at->diffForHumans()}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
