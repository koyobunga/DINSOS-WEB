@extends('layouts.admin')
@section('main')
    <div class="page-description">
        <div class="d-flex mb-4">
            <div class="fw-bold h4">{{ $title }}</div>
            <a href="{{ route('aplikasis.create')}}" class="btn btn-primary ml-auto">Tambah data</a>
        </div>

        <div class="row">
            @foreach($data as $d)
            <div class="col-lg-2 col-md-4 mt-4">
                <div class="card me-3 mb-3 shadow h-100">
                    <img src="{{ url('img/aplikasi/'.$d->icon) }}" class="card-img-top" alt="...">
                    <div class="card-body px-3 py-1"  style="font-size: 13px">
                        <div class="mt-2">{{ $d->label }}</div>
                        <div class="text-muted" style="font-size: 12px">{{ $d->ket }}</div>
                        <div class="d-flex mt-2 justify-content-end">
                            <a href="{{ url('admin/aplikasis/'.$d->id.'/edit') }}" class="btn mr-2 btn-outline-warning btn-sm ps-3 pe-1">
                                <i class="mdi mdi-file-document-edit-outline"></i></a>
                            <form action="{{ url('admin/aplikasis/'.$d->id) }}" method="POST">
                              @csrf
                              @method('delete')
                              <button data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus foto"
                                onclick="if(confirm('Hapus data?')){ return true;}else{ return false;}"
                                class="btn btn-outline-danger btn-sm ps-3 pe-1"><i class="mdi mdi-trash-can-outline"></i></button>
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
