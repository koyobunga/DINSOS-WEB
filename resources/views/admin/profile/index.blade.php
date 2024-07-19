@extends('layouts.admin')
@section('main')
    <div class="page-description">
        <div class="d-flex mb-4">
            <div class="fw-bold h4">{{ $title }}</div>
            <a href="{{ route('profiles.create')}}" class="btn btn-primary ml-auto">Tambah data</a>
        </div>

        <div class="card">
            <div class="card-body" style="font-size: 12px">
                <table id="tabel_berita" class="table table-striped my-3 table-centered dt-responsive  table-vertical" style="border-collapse: collapse; border-spacing: 0; width: 100%; font-size: 14px">
                    <thead>
                    <tr style="font-size: 13px">
                        <th>#</th>
                        <th>Profile</th>
                        <th>Ket</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $b)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="font-weight: bold">
                                    {{ $b->nama }}
                                </td>
                                <td>{!! Str::limit($b->ket, 150, '...') !!}</td>
                                <td class="d-flex">
                                    <a href="{{ url('admin/profiles/'.$b->id.'/edit') }}" class="btn btn-sm btn-info mr-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit berita">
                                        <i class="mdi mdi-file-document-edit-outline"></i>
                                    </a>
                                    <form action="{{ url('admin/profiles/'.$b->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="if(confirm('Hapus data?')){ return true;}else{ return false;}"
                                            class="btn btn-danger btn-sm ps-3 pe-1"><i class="mdi mdi-trash-can-outline"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>

        @foreach($data as $b)


        @endforeach

        {{ $data->links() }}

    </div>

@endsection
