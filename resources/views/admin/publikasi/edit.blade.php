@extends('layouts.admin')

@section('content')
    <div class="page-description">
        <h2 class="fw-bold">Berita</h2>
        
          @include('admin.berita.submenu')
          

          <form action="{{ url('admin/beritas/'.$data->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Label</label>
              <input value="{{ $data->label }}" name="label" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div>
              <label for="formFile" class="form-label">Cover</label>
              <input name="image" id="image" class="form-control" type="file" id="formFile" onchange="previewImage()">
            </div>
            @if ($data->image)
                  <img src="{{ url('images/'.$data->image) }}" class="img-preview img-fluid mt-2 col-sm-3 mb-3 d-block">
              @else
                  <img class="img-preview img-fluid mt-2 col-sm-3 mb-3">
              @endif

            <textarea id="summernote" name="desc" id="" cols="30" rows="10">
              {!! $data->desc !!}
            </textarea>
            
            

            <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
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

