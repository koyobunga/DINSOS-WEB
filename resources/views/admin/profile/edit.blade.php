@extends('layouts.admin')

@section('main')
    <div class="card p-4">



          <form action="{{ url('admin/profiles/'.$data->id) }}" method="POST" >
            @method('put')
            @csrf
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Nama Profile</label>
              <input required name="nama" value="{{ old('nama', $data->nama)}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('nama')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
              @enderror
            </div>


            <img class="img-preview img-fluid mt-2 col-sm-3 mb-3">

            <textarea id="elm1" name="ket" class="@error('ket') is-invalid @enderror" cols="30" rows="10">{{ old('ket', $data->ket)}}
            </textarea>
             @error('ket')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
              @enderror



              <div class="d-flex mt-4">
                <a href="{{ url('admin/profiles') }}" class="btn btn-secondary"> <i class="mdi mdi-keyboard-backspace"></i> Kembali </a>
                <button type="submit" class="btn ml-auto btn-warning">Perbarui</button>
            </div>
          </form>

    </div>


@endsection

