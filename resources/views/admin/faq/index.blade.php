@extends('layouts.admin')

@section('main')
    <div class="card p-4">



          <form action="{{ url('admin/faqs/'.$data->id) }}" method="POST" >
            @method('put')
            @csrf

            <div class="d-flex mb-2">
                <button type="submit" class="btn ml-auto btn-primary"> Simpan Perubahan</button>
          </div>
            <textarea id="elm1" style="height: 500px" name="ket" class="@error('ket') is-invalid @enderror shadow" rows="100">{{ old('ket', $data->ket)}}
            </textarea>
             @error('ket')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
              @enderror




          </form>

    </div>


@endsection

