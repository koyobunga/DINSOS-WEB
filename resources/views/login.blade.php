<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>DINSOS | PROVINSI GORONTALO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL('img/logo.png')}}">

        <!-- Bootstrap Css -->
        <link href="{{url('assets/admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('assets/admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg" style="background: url('{{url('assets/admin/images/bg-2.jpg')}}'); background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <a href="index.html"><img src="{{url('img/logo.png')}}" height="80" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 mt-5 text-center">DINAS SOSIAL</h4>
                                <p class="text-muted text-center">Provinsi Gorontalo</p>

                              <form class="mt-4" action="{{url('signin/auth')}}" method="POST">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input name="username" type="text" class="form-control" id="username" placeholder="Enter username">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-5 text-center">
                                        <a href="{{url('/')}}" class="text-primary"><i class="ion ion-md-home"></i> Home</a>
                                    </div>
                                </div>
                            </form>

                            <div class="mt-5 pt-4 text-center">
                                {{-- <p>Don't have an account ? <a href="pages-register-2.html" class="font-weight-medium text-primary"> Signup now </a> </p> --}}
                                <p>2024 © DINSOS Provinsi Gorontalo
                            </div>

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- JAVASCRIPT -->
        <script src="{{url('assets/admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('assets/admin/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{url('assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('assets/admin/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{url('assets/admin/js/app.js')}}"></script>

    </body>
</html>
