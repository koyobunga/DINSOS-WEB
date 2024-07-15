@extends('layouts.admin')

@section('main')
    <div class="card p-4 shadow">
        {{-- <h2 class="fw-bold">Berita</h2> --}}

          <form action="{{ url('admin/layanans') }}"  method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Nama Layanan</label>
              <input required name="nama" value="{{ old('nama')}}" type="text" class="form-control is-invalid" aria-describedby="emailHelp">
              @error('nama')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
              @enderror
            </div>

            <div class="">
              <label for="formFile" class="form-label">Cover</label>
              <input required name="foto" id="foto" class="form-control is-invalid" type="file" onchange="previewImage()">
              @error('foto')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
              @enderror
            </div>

            <img class="img-preview img-fluid mt-2 col-sm-3 mb-3">

            <textarea id="elm1" name="ket"  cols="30" rows="10">
            </textarea>

            <div class="d-flex mt-4">
                <a href="{{ url('admin/layanans') }}" class="btn btn-secondary"> <i class="mdi mdi-keyboard-backspace"></i> Kembali </a>
                <button type="submit" class="btn ml-auto btn-primary">Posting</button>
            </div>
          </form>

    </div>


    <script>

      function previewImage(){
        const image = document.querySelector('#foto');
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



