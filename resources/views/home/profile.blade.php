@extends('layouts.landing2')
@section('main')
<div class="container ms-auto" style="margin-top: 130px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="btn btn-sm" href="#">Profile</a></li>
                <li class="breadcrumb-item active btn btn-sm" aria-current="page">{{ $data->nama }}</li>
        </ol>
      </nav>
    <div class="row mt-4" style="min-height: 700px">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <h2 class="card-title">{{$data->nama}}</h2>
                            <p class="card-text">{!! $data->ket !!}</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
@endsection
