@extends('layouts.bidang')

@section('main')
<div class="card p-4">



  <form action="{{ url('bidang/asets/'.$data->id) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3 row">
      <div class="col-lg-3">
        <label for="exampleInputEmail1" class="form-label">Kode</label>
        <input required readonly name="kode" value="{{ old('kode', $data->kode)}}" type="text" class="form-control @error('kode') is-invalid @enderror">
        @error('kode')
        <div class="invalid-feedback">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="col-lg-6">
        <label for="exampleInputEmail1" class="form-label">Item Barang</label>
        <div class="input-group">
          <select required name="item_id" class="form-control select2" id="inputGroupSelect04">
            <option value="">Pilih item</option>
            @foreach ($item as $i)
              <option @if(old('item_id', $data->item_id) == $i->id) selected @endif value="{{ $i->id }}">{{ $i->nama }}</option>
            @endforeach
          </select>
          <div class="input-group-append">
            <button  class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#exampleModal"><i class="ion ion-md-add-circle-outline"></i></button>
          </div>
        </div>
        @error('item_id')
        <div class="invalid-feedback">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="col-lg-3">
        <label for="exampleInputEmail1" class="form-label">Merk</label>
        <input required name="merk" value="{{ old('merk', $data->merk)}}" type="text"
          class="form-control @error('merk') is-invalid @enderror" id="exampleInputEmail1"
          aria-describedby="emailHelp">
        @error('merk')
        <div class="invalid-feedback">
          {{ $message}}
        </div>
        @enderror
      </div>
    </div>

    <div class="mb-3 row">
      <div class="col-lg-3">
        <label for="exampleInputEmail1" class="form-label">Satuan</label>
        <input required name="satuan" value="{{ old('satuan', $data->satuan)}}" type="text"
          class="form-control @error('satuan') is-invalid @enderror" id="exampleInputEmail1"
          aria-describedby="emailHelp">
        @error('satuan')
        <div class="invalid-feedback">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="col-lg-3">
        <label for="exampleInputEmail1" class="form-label">Jumlah</label>
        <input required name="jumlah" value="{{ old('jumlah', $data->jumlah)}}" type="number"
          class="form-control @error('jumlah') is-invalid @enderror" id="exampleInputEmail1"
          aria-describedby="emailHelp">
        @error('jumlah')
        <div class="invalid-feedback">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="col-lg-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal BAPP</label>
        <input required name="bapp" value="{{ old('bapp', $data->bapp)}}" type="date"
          class="form-control @error('bapp') is-invalid @enderror" id="exampleInputEmail1"
          aria-describedby="emailHelp">
        @error('bapp')
        <div class="invalid-feedback">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="col-lg-3">
        <label for="floatingSelect">Kondisi</label>
        <select required name="kondisi" required class="form-control @error('kondisi') is-invalid @enderror"
          id="floatingSelect" aria-label="Floating label select example">
          <option value="">Pilih</option>
          <option @if(old('kondisi', $data->kondisi) == 'Baik') selected @endif value="Baik">Baik</option>
          <option @if(old('kondisi', $data->kondisi) == 'Cukup Baik') selected @endif value="Cukup Baik">Cukup Baik</option>
          <option @if(old('kondisi', $data->kondisi) == 'Rusak') selected @endif value="Rusak">Rusak</option>
          <option @if(old('kondisi', $data->kondisi) == 'Baik Ringan') selected @endif value="Rusak Ringan">Rusak Ringan</option>
          <option @if(old('kondisi', $data->kondisi) == 'Rusak Berat') selected @endif value="Rusak Berat">Rusak Berat</option>
        </select>
        @error('kondisi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>

    <div class="mb-3 mt-2 row">
      <div class="col-lg-4">
        <label for="exampleInputEmail1" class="form-label">Nomor Polisi</label>
        <input name="no_pol" value="{{ old('no_pol', $data->no_pol)}}" type="text"
          class="form-control is-valid" id="exampleInputEmail1"
          aria-describedby="emailHelp">
      </div>
      <div class="col-lg-4">
        <label for="exampleInputEmail1" class="form-label">Nomor Mesin</label>
        <input name="no_mesin" value="{{ old('no_mesin', $data->no_mesin)}}" type="text"
          class="form-control is-valid" id="exampleInputEmail1"
          aria-describedby="emailHelp">
      </div>
      <div class="col-lg-4">
        <label for="exampleInputEmail1" class="form-label">Nomor Rangka</label>
        <input name="no_rangka" value="{{ old('no_rangka', $data->no_rangka)}}" type="text"
          class="form-control is-valid" id="exampleInputEmail1"
          aria-describedby="emailHelp">
      </div>
     
    </div>

    <div class="">
      <label for="formFile" class="form-label">Foto</label>
      <input name="foto" id="foto" class="form-control" type="file" onchange="previewImage()">
      @error('foto')
        <div class="invalid-feedback">
            {{ $message}}
        </div>
      @enderror
    </div>

    @if ($data->foto)
        <img src="{{ url('img/aset/'.$data->foto) }}" class="img-preview img-fluid mt-2 col-sm-3 mb-3 d-block">
    @else
        <img class="img-preview img-fluid mt-2 col-sm-3 mb-3">
    @endif


    <div class="mt-1">

      <label for="floatingSelect">Deskripsi aset</label>
      <textarea id="elm1" name="ket" placeholder="Deskripsi aset" class="@error('ket') is-invalid @enderror" cols="30" rows="10">{{ old('ket')}}
          {{ old('ket', $data->ket) }}
      </textarea>
      @error('ket')
      <div class="invalid-feedback">
        {{ $message}}
      </div>
      @enderror
    </div>



    <div class="d-flex mt-4">
      <a href="{{ url('bidang') }}" class="btn btn-secondary"> <i class="mdi mdi-keyboard-backspace"></i> Kembali </a>
      <button type="submit" class="btn ml-auto btn-primary">Simpan</button>
    </div>
  </form>

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{ url('bidang/items') }}" method="post">
            @csrf
            @method('post')
              <div class="input-group mb-3">
                <input required type="text" name="nama" value="{{ old('nama')}}" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Barang" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-success" type="submit">Tambahkan</button>
                </div>
              </div>
            
          </form>
            <hr>
            <div class="table-responsive mt-4" style="font-size: 12px">
              <table class="table my-3" id="data_item">
                <thead>
                  <tr>
                    <th style="width: 20px">#</th>
                    <th class="w-100">Item</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($item as $i)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $i->nama }}</td>
                        <td>
                          <form action="{{ url('bidang/items/'.$i->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Hapus Item?')" type="submit" class="btn btn-sm btn-outline-danger">
                              <i class="ion ion-md-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
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