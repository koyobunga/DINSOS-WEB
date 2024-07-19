@extends('layouts.bidang')

@section('main')
<div class="card p-4">



  <h5 class="mb-3">{{ $galeri->label }}</h5>

  <form action="{{ url('bidang/galeri_dets') }}" method="POST" enctype="multipart/form-data">
    @method('post')
    @csrf
    <input type="hidden" name="galeri_id" value="{{ $galeri->id }}">

    <div class="input-group">
      <input required accept="image/*" type="file" name="foto" class="form-control" id="inputGroupFile04"
        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
      <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04">Upload foto</button>
      <a href="{{ url('bidang/galeris') }}" class="btn btn-secondary"> Kembali </a>

    </div>
  </form>

  <div class="row">

    @foreach($galeri->galeri_det->sortDesc() as $d)
    <div class="col-lg-2 col-md-4 mt-4">
      <div class="card me-3 mb-3 position-relative shadow-sm h-100">
        <img src="{{ url('img/galeri/'.$d->foto) }}" class="card-img-top" alt="...">

        <div class="position-absolute bottom-0 end-0 mb-2 me-2">
          <form action="{{ url('bidang/galeri_dets/'.$d->id) }}" method="POST">
            @csrf
            @method('delete')
            <button data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus foto"
              onclick="if(confirm('Hapus data?')){ return true;}else{ return false;}"
              class="btn btn-danger btn-sm ml-1 mt-1"><i class="mdi mdi-trash-can-outline"></i></button>
          </form>
        </div>

      </div>
    </div>
    @endforeach
  </div>

</div>


@endsection
