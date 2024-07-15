@extends('layouts.admin')

@section('main')
    <div class="card p-4">



          <form action="{{ url('admin/aplikasis') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf

            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Nama Aplikasi</label>
              <input required name="label" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Aplikasi">
            </div>

            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
              <textarea required name="ket" placeholder="Deskripsi Aplikasi" class="form-control"></textarea>
            </div>

            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">URL Aplikasi</label>
              <input required name="url" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="URL Aplikasi">
            </div>

            <div class="">
              <label for="formFile" class="form-label">Cover</label>
              <input required name="icon" accept="image/*" id="icon" class="form-control" type="file" id="formFile" onchange="previewImage()">
              <img class="img-preview img-fluid mt-2 col-sm-2 mb-3">
            </div>

            <div class="d-flex mt-4">
                <a href="{{ url('admin/beritas') }}" class="btn btn-secondary"> <i class="mdi mdi-keyboard-backspace"></i> Kembali </a>
                <button type="submit" class="btn ml-auto btn-primary">Posting</button>
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

