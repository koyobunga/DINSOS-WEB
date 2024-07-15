<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>DINSOS - Provinsi Gorontalo</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{ url('img/logo.png')}}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500|Quattrocento+Sans:400,700" rel="stylesheet" />

        <!--Mobirise Icons-->
        <link rel="stylesheet" type="text/css" href={{ url('assets/landing/css/mobirise.css')}}" />

        <!-- Magnific-popup -->
        <link rel="stylesheet" href="{{ url('assets/landing/css/magnific-popup.css')}}">

        <!--Material Design Icons-->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/landing/css/materialdesignicons.min.css')}}" />

        <!-- Bootstrap core CSS -->
        <link href="{{url('assets/landing/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{url('assets/landing/css/style.css')}}" rel="stylesheet">

    </head>

    <body data-spy="scroll" data-target="#navbar-example" data-offset="20">

        <!--START NAVBAR-->
        <nav id="navbar-example" class="navbar navbar-expand-lg navbar-inverse navbar-toggleable-md fixed-top sticky navbar-custom" >
            <div class="container">
                <a class="navbar-brand logo" href="#">
                    <img src="{{ url('img/logo.png')}}" height="50" class="mr-2" align="left" alt="">
                    <span class="logo-text ms-3">PROVINSI GORONTALO<br>
                    <span style="font-size: 14px">DINAS SOSIAL</span>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto" id="mySidenav">
                        {{-- <li class="nav-item">
                            <a href="#home" class="nav-link active">Home</a>
                        </li> --}}

                        <li class="nav-item">
                            <a href="#layanans" class="nav-link">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a href="#kegiatans" class="nav-link">Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a href="#beritas" class="nav-link">Berita</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Publikasi</a>
                            <div class="dropdown-menu px-2">
                                @foreach ($publikasi as $p)
                                <a class="dropdown-item text-secondary pb-0" style="font-size: 13px" href="{{ url('publikasi/'.$p->id)}}">{{$p->nama}}</a>
                                @endforeach
                                           <div class="mb-1"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Aplikasi</a>
                            <div class="dropdown-menu px-2">
                                @foreach ($aplikasi as $a)
                                  <a class="dropdown-item text-secondary pb-0" style="font-size: 13px" target="_blank" href="{{ $a->url}}">{{ $a->label }}</a>
                                @endforeach
                                  <div class="mb-1"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Profile</a>
                            <div class="dropdown-menu px-2">
                                @foreach ($profile as $p)

                                <a class="dropdown-item text-secondary pb-0" style="font-size: 13px" href="{{url('profile/'.$p->id)}}">{{ $p->nama }}</a>
                                @endforeach

                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('faq')}}" class="nav-link">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--END NAVBAR-->

        @yield('main')

        <!--start footer-->
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="float-right pull-none">
                            <ul class="list-inline social">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="mdi mdi-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="mdi mdi-google"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="mdi mdi-facebook"></i></a></li>
                            </ul>
                        </div>
                        <div class="pull-none">
                            <p class="copy-rights">2024 © DINSOS PROVINSI GORONTALO</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--END FOOTER-->

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{url('assets/landing/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/landing/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Sticky Header -->
        <script src="{{url('assets/landing/js/jquery.sticky.js')}}"></script>
        <!-- Jquery easing -->
        <script src="{{url('assets/landing/js/jquery.easing.min.js')}}"></script>
        <script src="{{url('assets/landing/js/jquery.magnific-popup.min.js')}}"></script>
        <!--common script for all pages-->
        <script src="{{url('assets/landing/js/jquery.app.js')}}"></script>


    </body>

</html>
