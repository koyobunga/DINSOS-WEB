@extends('layouts.admin')


@section('main')
    <div class="card p-4">



          <form action="{{ url('admin/aplikasis/'.$data->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Nama Aplikasi</label>
              <input required value="{{ $data->label }}" name="label" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Aplikasi">
            </div>

            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
              <textarea required name="ket" class="form-control">{{ $data->ket }}</textarea>
            </div>

            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">URL Aplikasi</label>
              <input required value="{{ $data->url }}" name="url" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="URL Aplikasi">
            </div>

            <div class="">
              <label for="formFile" class="form-label">Cover</label>
              <input name="icon" accept="image/*" id="icon" class="form-control" type="file" id="formFile" onchange="previewImage()">
              @if ($data->icon)
                  <img src="{{ url('img/aplikasi/'.$data->icon) }}" class="img-preview img-fluid mt-2 col-sm-3 mb-3 d-block">
              @else
                  <img class="img-preview img-fluid mt-2 col-sm-3 mb-3">
              @endif
            </div>

            <div class="d-flex mt-4">
                <a href="{{ url('admin/beritas') }}" class="btn btn-secondary"> <i class="mdi mdi-keyboard-backspace"></i> Kembali </a>
                <button type="submit" class="btn ml-auto btn-warning"> Perbarui </button>
            </div>
          </form>

    </div>

    <script>
      function previewImage(){
        const image = document.querySelector('#icon');
        const imagePreview = document.querySelector('.img-preview');
        imagePreview.style.display='block';

        const oFreader = new FileReader();
        oFreader.readAsDataURL(image.files[0]);
        oFreader.onload = function(oFREvent){
          imagePreview.src = oFREvent.target.result;
        }
      }
    </script>

@endsection

