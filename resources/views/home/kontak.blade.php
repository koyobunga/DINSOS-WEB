@extends('layouts.landing2')
@section('main')
<div class="container ms-auto" style="margin-top: 130px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a class="btn btn-sm btn-custom" href="#">FAQ</a></li> --}}
                <li class="breadcrumb-item active btn btn-sm" aria-current="page">Kontak</li>
        </ol>
      </nav>
    <div class="row mt-4" style="min-height: 700px">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <h2 class="card-title">Kontak</h2>


                            <div class="">
                                <p class="text-muted mb-4">
                                    Alamat Jln. Beringin Piola Isa, Kelurahan Dulomo Selatan, Kecamatan Kota Tengah, Kota Gorontalo
                                    <br>mail: dinassosialprov@gmail.com<br>
                                    chat only: (0812 4365 5654)
                                </p>
                            </div>

                            <form action="{{ url('kontak/message')}}" method="POST">
                                @csrf
                                @method("post")
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="username">Name</label>
                                            <input required name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="username" required />
                                            @error('nama')
                                                <div class="invalid-feedback">{{ $message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="useremail">Email address</label>
                                            <input required name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" required />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input required name="subjek" type="text" class="form-control @error('subjek') is-invalid @enderror" id="subject" required />
                                            @error('subjek')
                                                <div class="invalid-feedback">{{ $message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea required name="pesan" class="form-control @error('pesan') is-invalid @enderror" rows="5" id="message"></textarea>
                                            @error('pesan')
                                                <div class="invalid-feedback">{{ $message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" @if(session()->has('pesan')) autofocus @endif class="btn btn-custom">Send Message</button>
                                    </div>

                                </div>
                                @if(session()->has('pesan'))
                                    <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                                    <strong>Info </strong>{{ session('pesan')}}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
@endsection
