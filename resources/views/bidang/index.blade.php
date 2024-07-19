@extends('layouts.bidang')

@section('main')
<div class="page-description">
    @if(request('semua'))
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bidang') }}">Aset Bidang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('bidang?semua=true') }}">Semua aset</a>
            </li>
        </ul>
    @else
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('bidang') }}">Aset Bidang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bidang?semua=true') }}">Semua aset</a>
            </li>
        </ul>
    @endif
    

    <div class="card mt-3">
        <div class="card-body">

            @if(request('semua'))
                <div class="d-flex mb-4">
                    <div class="fw-bold h5">Semua Aset</div>
                    <div class="ml-auto">
                        {{-- <a href="{{ url('bidang/asets/create')}}" class="btn btn-outline-primary">Tambah data</a> --}}
                        <a href="{{ url('bidang/aset/print?semua=true') }}" class="btn btn-outline-danger">
                            <i class="ion ion-md-print"></i>
                        </a>
                    </div>
                </div>
            @else
                <div class="d-flex mb-4">
                    <div class="fw-bold h5">{{ Auth::user()->bidang->nama }}</div>
                    <div class="ml-auto">
                        <a href="{{ url('bidang/asets/create')}}" class="btn btn-outline-primary">Tambah data</a>
                        <a href="{{ url('bidang/aset/print') }}" class="btn btn-outline-danger">
                            <i class="ion ion-md-print"></i>
                        </a>
                    </div>
                </div>
            @endif

            <div class="table-responseve" style="font-size: 12px">
            <table id="tabel_berita" class="table my-3 table-centered"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr style="font-size: 13px">
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Merk</th>
                        <th>Satuan</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                        <th>Desc</th>
                        @if(!request('semua'))
                        <th>Opsi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->kode }}</td>
                            <td>{{ $d->item->nama }}</td>
                            <td>{{ $d->merk }}</td>
                            <td>{{ $d->satuan }}</td>
                            <td>{{ $d->jumlah}}</td>
                            <td>{{ $d->kondisi }}</td>
                            <td>
                                @if($d->no_pol) <div class="mr-3">Nomor Polisi. {{ $d->no_pol }}</div>  @endif
                                @if($d->no_mesin) <div class="mr-3">Nomor Mesin. {{ $d->no_mesin }}</div>  @endif
                                @if($d->no_rangka) <div class="">Nomor Rangka. {{ $d->no_rangka }}</div>  @endif
                                {{ $d->ket }}
                            </td>
                            @if(!request('semua'))
                            <td class="d-flex">
                                <a href="{{ url('bidang/asets/'.$d->id.'/edit') }}" class="btn btn-sm btn-info mr-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit berita">
                                    <i class="mdi mdi-file-document-edit-outline"></i>
                                </a>
                                <form action="{{ url('bidang/asets/'.$d->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="if(confirm('Hapus data?')){ return true;}else{ return false;}"
                                        class="btn btn-danger btn-sm ps-3 pe-1"><i class="mdi mdi-trash-can-outline"></i></button>
                                </form>
                            </td>
                            @endif
                        </tr>
                    @endforeach


                </tbody>
            </table>
            </div>

            {{-- {{ $berita->links() }} --}}

        </div>
    </div>
</div>
@endsection