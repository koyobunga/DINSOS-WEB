@extends('layouts.admin')
@section('main')
    <div class="card p-4">
        <div class="d-flex mb-4">
            <div class="fw-bold h4">{{ $title }}</div>
          </div>

    <form action="{{ url('admin/bidangs') }}" method="POST">
        @method('post')
        @csrf
        <div>
            <div class="w-100">
                <label for="exampleInputEmail1" class="form-label">Nama Bidang</label>
                <input required name="nama" value="{{ old('nama')}}" type="text" class="form-control @error('nama') is-invalid @enderror" aria-describedby="emailHelp">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                @enderror
            </div>
            <div class="ps-1">
                <button type="submit" class="btn btn-primary mt-2">Tambah Bidang</button>
            </div>
        </div>


    </form>

    <div class="table-responsive mt-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Bidang</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="w-100">{{ $d->nama }}</td>
                    <td class="d-flex text-end">
                        <button onclick="edit({{ $loop->index }})" class="btn btn-outline-warning mr-1 btn-sm"><i class="mdi mdi-file-document-edit-outline"></i></button>
                        <form action="{{ url('admin/bidangs/'.$d->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button onclick="if(confirm('Hapus data?')){ return true;}else{ return false;}"
                                class="btn btn-outline-danger btn-sm ps-3 pe-1"><i class="mdi mdi-trash-can-outline"></i></button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>


</div>


  <!-- Modal -->
  <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ url('admin/bidangs/editnama') }}" method="POST">
            @csrf
            @method('post')
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="hidden" id="id" name="id">
            <div class="form-floating">
                <label for="floatingInput">Nama Bidang</label>
                <input required name="nama" id="nama" required type="text" class="form-control" id="floatingInput"
                    placeholder="Nama Bidang">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Perbarui</button>
        </div>
      </div>
        </form>
    </div>
  </div>

<script>
    var data = {!! json_encode($data->toArray()) !!};

    function edit(index){
        $('#modal_edit').modal('show');
        $('#id').val(data[index].id);
        $('#nama').val(data[index].nama);
    }
</script>

@endsection
