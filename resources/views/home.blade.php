
@extends('layouts.landing')
@section('main')

        <!--START HOME-->
        <section class="section home" id="home">
            <div class="bg-overlay"></div>
            <div class="row">
                <div class="col-12  text-white text-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{{ url('img/wall1.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="{{ url('img/wall2.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="{{ url('img/wall3.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev border-0 bg-transparent" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next border-0 bg-transparent" type="" data-target="#carouselExampleIndicators" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                        </div>
                </div>
            </div>
        </section>
        <!--END HOME-->

        <section class="section" id="layanans">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3>Layanan</h3>
                            <p class="text-muted slogan">
                                <a class="btn btn-warning" href="{{url('layanan')}}"><i class="mdi mdi-table-edit mr-2"></i>Quisioner Kepuasan</a>
                                <a class="btn btn-custom" href="{{url('layanan')}}">Lihat lebih banyak</a>
                            </p>
                            {{-- <p class="text-muted slogan">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vivamus eu sollicitudin lacus, nec ultricies lorem.</p> --}}
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    @foreach ($layanan as $l)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 mx-2">
                            <img class="card-img-top img-fluid" style="max-height: 270px" src="{{ url('img/layanan/'.$l->foto)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$l->nama}}</h5>
                                <p class="card-text">{{ $l->ket }}</p>
                                <a href="{{ url('layanan?show='.$l->id)}}" class="btn btn-custom btn-sm waves-effect waves-light">Buka</a>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>

            </div>
        </section>

        <section class="section bg-grey" id="kegiatans">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3>Galeri Kegiatan</h3>
                            <p class="text-muted slogan">
                                <a class="btn btn-custom" href="{{url('galeri')}}">Lihat lebih banyak</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    @foreach ($galeri as $g)
                        <div class="col-sm-4">
                            <a href="{{ url('img/galeri/'.$g->galeri_det[0]->foto)}}" class="thumb preview-thumb image-popup" title="{{ $g->label}}">
                                <img src="{{ url('img/galeri/'.$g->galeri_det[0]->foto)}}" style="height: 240px" class="thumb-img" alt="work-thumbnail">
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

        <section class="section" id="beritas">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3>Berita terbaru</h3>
                            <a class="btn btn-custom" href="{{url('berita')}}">Lihat lebih banyak</a>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    @foreach ($berita as $b)
                        <div class="col-sm-4">
                            <div class="card h-100">
                                <img class="card-img-top img-fluid" style="max-height: 250px" src="{{ url('img/berita/'.$b->image)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mb-1">{{$b->label}}</h5>
                                    <div class="text-muted small">Psoted, {{ $b->created_at->diffForHumans() }}</div>
                                    <div class="card-text mt-2">{!! Str::limit($b->desc, 120, '...') !!}</div>
                                    <a href="{{url('berita/'.$b->slug)}}" class="btn btn-custom btn-sm waves-effect waves-light">Baca </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- end row -->

            </div>
        </section>




        <!--Form Section-->
        <section class="section bg-grey" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3>Kontak</h3>
                            <p class="text-muted slogan">
                                Alamat Jln. Beringin Piola Isa, Kelurahan Dulomo Selatan, Kecamatan Kota Tengah, Kota Gorontalo
                                <br>mail: dinassosialprov@gmail.com<br>
                                chat only: (0812 4365 5654)
                            </p>
                        </div>
                    </div>
                </div>

                <br/>

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
        </section>
        <!--END FORM-->

@endsection
