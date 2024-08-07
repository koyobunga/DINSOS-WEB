@extends('layouts.admin')

@section('main')


    <div class="card shadow-sm">
         <div class="card-body p-4">
            {{-- <h4 class="card-title">{{ $title }}</h4> --}}

            <form action="{{ url('admin/users') }}" method="POST">
                @csrf
                @method('post')

                <div class="mb-3">
                    <label for="floatingInput">Nama</label>
                    <input id="name" required value="{{ old('name') }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Nama">
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="floatingInput">Email</label>
                    <input id="email" required value="{{ old('email') }}" name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="floatingSelect">Level</label>
                    <select required name="level" required class="form-control @error('level') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                      <option value="">Pilih</option>
                      <option value="bidang">Bidang</option>
                      <option value="admin">Admin</option>
                    </select>
                    @error('level')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="floatingSelect">Bidang</label>
                    <select name="bidang_id"  class="form-control @error('bidang_id') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                      <option value="">Pilih</option>
                      @foreach ($bidang as $b)
                      <option value="{{ $b->id}}">{{ $b->nama }}</option>
                      @endforeach
                    </select>
                    @error('bidang_id')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                <div class="mb-3">
                    <label for="floatingInput">Username</label>
                    <input id="username" required value="{{ old('username') }}" name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username">
                    @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="floatingInput">Password</label>
                    <input id="password" required value="{{ old('password') }}" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="d-flex mt-4">
                    <a href="{{ url('admin/users') }}" class="btn btn-secondary"> <i class="mdi mdi-keyboard-backspace"></i> Kembali </a>
                    <button type="submit" class="btn ml-auto btn-primary">Tambahkan</button>
                </div>
        </form>

        </div>
    </div>



@endsection
