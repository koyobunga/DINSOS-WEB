@extends('layouts.landing2')
@section('main')
<div class="container ms-auto" style="margin-top: 130px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="btn btn-sm" href="#">Publikasi</a></li>
                <li class="breadcrumb-item active btn btn-sm" aria-current="page">{{ $data->nama }}</li>
        </ol>
      </nav>
    <div class="row mt-4" style="min-height: 700px">
        <div class="col-12 table responsive">
            <div class="card p-4">
                <h2>{{ $data->nama}}</h2>
                <p class="text-muted"> {{ $data->ket }}</p>
                <table class="table mt-4 table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Dokumen</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data->publikasi_det as $d)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $d->nama}}
                                <p class="text-muted">{{ $d->ket }}</p>
                                <div class="text-muted small">Posted {{ $d->created_at->format('d F Y')}}</div>
                            </td>
                            <td class="text-right"><a class="btn btn-sm btn-custom py-1" href="{{ url('publikasi_det/'.$d->id.'/download')}}"><i class="mdi mdi-download"></i> Download</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        </div>

    </div>
</div>
@endsection
