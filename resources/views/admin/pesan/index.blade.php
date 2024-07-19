@extends('layouts.admin')

@section('main')
    <div class="card p-4">
      <label for="exampleInputEmail1" class="form-label h5">Pesan</label>

      <div class="table-responsive small mt-4">
      <table id="data" class="table py-3">
        <thead>
          <tr class="">
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $d)
              <tr style="font-size: 14px">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->email }}</td>
                <td>
                  <span>Subjek: <b>{{ $d->subjek }}</b></span>
                  <p>{{ $d->pesan }}</p>
                </td>
                <td class="d-flex text-end">
                  <a class="btn btn-sm btn-outline-primary mr-2" href="mailto:{{ $d->email }}?subject=Re:%20Email%20Answer&body=Email%20Body%20Text"><i class="ion ion-md-share-alt"></i></a>
                  <form action="{{ url('admin/pesans/'.$d->id) }}" method="POST">
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

