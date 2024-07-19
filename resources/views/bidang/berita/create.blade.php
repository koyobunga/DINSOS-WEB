@extends('layouts.bidang')

@section('main')
    <div class="card p-4">



          <form action="{{ url('bidang/beritas') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Label</label>
              <input required name="label" value="{{ old('label')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('label')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
              @enderror
            </div>

            <div class="">
              <label for="formFile" class="form-label">Cover</label>
              <input required name="image" id="image" class="form-control" type="file" id="formFile" onchange="previewImage()">
              @error('image')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
              @enderror
            </div>

            <img class="img-preview img-fluid mt-2 col-sm-3 mb-3">

            <textarea id="elm1" name="desc" class="@error('desc') is-invalid @enderror" cols="30" rows="10">{{ old('desc')}}
            </textarea>
             @error('desc')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
              @enderror



              <div class="d-flex mt-4">
                <a href="{{ url('bidang/beritas') }}" class="btn btn-secondary"> <i class="mdi mdi-keyboard-backspace"></i> Kembali </a>
                <button type="submit" class="btn ml-auto btn-primary">Posting</button>
            </div>
          </form>

    </div>


    <script>
      function previewImage(){
        const image = document.querySelector('#image');
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

