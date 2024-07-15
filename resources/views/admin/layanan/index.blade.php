@extends('layouts.admin')
@section('main')
    <div class="page-description">
        <div class="d-flex mb-4">
            <div class="fw-bold h4">{{ $title }}</div>
            <a href="{{ route('layanans.create')}}" class="btn btn-primary ml-auto">Tambah data</a>
        </div>

        <div class="row">
            @foreach($data as $d)
            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ url('img/layanan/'.$d->foto)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $d->nama }}</h5>
                        <p class="card-text">{!! $d->ket!!}</p>
                        <div class="d-flex">
                            <a href="{{ url('admin/layanans/'.$d->id.'/edit')}}" class="btn btn-outline-info btn-sm"><i class="mdi mdi-file-document-edit-outline"></i></a>
                            <form method="POST" action="{{ url('admin/layanans/'.$d->id)}}" class="ml-1">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Hapus data?')" type="submit" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-trash-can-outline"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{ $data->links() }}

    </div>

@endsection
