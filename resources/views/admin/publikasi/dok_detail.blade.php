@extends('layouts.admin')

@section('main')
<div class="card p-4">

        <h5 class="mb-3 ">{{ $publikasi->nama }}</h5>

          <form action="{{ url('admin/publikasi_dets') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf
              <input type="hidden" name="publikasi_id" value="{{ $publikasi->id }}">
              <div class="mb-2">
                  <label for="floatingInput">Label Dokumen</label>
                  <input required name="nama" type="text" class="form-control" id="floatingInput" placeholder="Label Dokumen">
              </div>

              <div class="mb-2">
                  <label for="floatingTextarea">Keterangan</label>
                  <textarea name="ket" class="form-control" placeholder="Keterangan" id="floatingTextarea"></textarea>
              </div>

              <div class="mb-2">
                <label for="formFile" class="form-label">File dokumen</label>
                <input accept=
                "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                text/plain, application/pdf" required name="nm_file" class="form-control" type="file">
              </div>

              <div class="d-flex mt-4">
                <a href="{{ url('admin/publikasis') }}" class="btn btn-secondary"> <i class="mdi mdi-keyboard-backspace"></i> Kembali </a>
                <button type="submit" class="btn ml-auto btn-primary">Upload Dokumen</button>
            </div>
          </form>


          <div class="table-responsive mt-5">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Dokumen</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publikasi->dokumen_det->sortDesc() as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="w-100">
                          {{ $d->nama }}
                          <div class="text-muted small">{{ $d->ket }}</div>
                        </td>
                        <td>
                            <form action="{{ url('admin/publikasi_dets/'.$d->id) }}" method="POST">
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


@endsection

