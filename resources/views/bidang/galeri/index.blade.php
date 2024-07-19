@extends('layouts.bidang')
@section('main')
<div class="card p-4">


    <form action="{{ url('bidang/galeris') }}" method="POST">
        @method('post')
        @csrf
        <div class="">
            <div class="w-100">
                <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                <input required name="label" value="{{ old('label')}}" type="text" class="form-control @error('label') is-invalid @enderror" aria-describedby="emailHelp">
                @error('label')
                    <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                @enderror
            </div>
            <div class="mt-1">
                <button type="submit" class="btn btn-primary">Tambahkan Kegiatan</button>
            </div>
        </div>


    </form>

    <div class="table-responsive mt-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Galeri Foto</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="w-100">{{ $d->label }}</td>
                    <td class="d-flex text-end">
                        <a href="{{ url('bidang/galeri_det/'.$d->id) }}" class="btn btn-success btn-sm mr-3"><i class="mdi mdi-image-plus"></i></a>
                        <button onclick="edit({{ $loop->index }})" class="btn btn-warning btn-sm ps-3 mr-1"><i class="mdi mdi-file-document-edit-outline"></i></button>
                        <form action="{{ url('bidang/galeris/'.$d->id) }}" method="POST">
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

    {{ $data->links() }}

</div>


<!-- Modal -->
<div id="modal_edit" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="{{ url('bidang/galeri/editlabel') }}" method="POST">
        @method('post')
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Label</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                        <input required name="label" id="label" value="{{ old('label')}}" type="text" class="form-control is-invalid" aria-describedby="emailHelp">
                        @error('label')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    var data = {!! json_encode($data->toArray()) !!};

    function edit(index){
        $('#modal_edit').modal('show');
        $('#id').val(data.data[index].id);
        $('#label').val(data.data[index].label);
    }
</script>

@endsection
