@php
    use App\Models\Pesan;
    $pm = Pesan::where('status', 0)->get();
@endphp

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>DINSOS | ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('img/logo.png')}}">


        <!-- Bootstrap Css -->
        <link href="{{ url('assets/admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('assets/admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <link href="{{ url('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    </head>

    <body data-topbar="dark">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ url('img/logo.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('img/logo.png')}}" alt="" height="36">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block ml-2">
                            <h4 class="page-title">{{ $title }}</h4>
                        </div>
                    </div>

                    {{-- <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input form-control" placeholder="Search" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div> --}}

                    <div class="d-flex">

                        {{-- <div class="dropdown d-none d-lg-inline-block mr-2">
                            <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block mr-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div> --}}



                        <div class="dropdown d-inline-block mr-3 pr-4">
                            <button type="button" class="btn header-item noti-icon pr-5 waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ion ion-md-notifications"></i>
                                @if($pm->count())
                                <span class="badge badge-danger badge-pill">{{ $pm->count() }}</span>
                                @endif
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Notification ({{ $pm->count() }}) </h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    @foreach ($pm as $p)
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="mdi mdi-cart-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 font-size-15 mb-1">{{ $p->nama }}</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">{{ Str::limit($p->pesan, 30, '...') }}</p>
                                                    <small>{{ $p->created_at->diffforhumans() }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach



                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="{{ url('admin/pesans') }}">
                                        Lihat pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{url('assets/admin/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="{{ url('admin/users')}}"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Ubah Password</a>
                                {{-- <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a> --}}
                                          <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ url('admin/signout')}}"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>



                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>


                            <li>
                                <a href="{{ url('admin') }}" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>

                            </li>



                            <li class="menu-title">Inputs</li>

                            <li>
                                <a href="{{ url('admin/layanans')}}" class="waves-effect">
                                    <i class="mdi mdi-room-service"></i>
                                    <span> Layanan </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('admin/galeris')}}" class="waves-effect">
                                    <i class="mdi mdi-run"></i>
                                    <span> Kegiatan </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('admin/beritas')}}" class="waves-effect">
                                    <i class="mdi mdi-email-newsletter"></i>
                                    <span> Berita </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('admin/publikasis')}}" class="waves-effect">
                                    <i class="mdi mdi-file-download-outline"></i>
                                    <span> Publikasi </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('admin/aplikasis')}}" class="waves-effect">
                                    <i class="mdi mdi-application"></i>
                                    <span> Aplikasi </span>
                                </a>
                            </li>


                            <li>
                                <a href="{{ url('admin/profiles')}}" class="waves-effect">
                                    <i class="mdi mdi-face-profile"></i>
                                    <span> Profile </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/faqs')}}" class="waves-effect">
                                    <i class="mdi mdi-help-circle"></i>
                                    <span> FAQ </span>
                                </a>
                            </li>



                            <li class="menu-title">Mastes</li>

                            <li>
                                <a href="{{ url('admin/bidangs')}}" class="waves-effect">
                                    <i class="mdi mdi-kodi"></i>
                                    <span> Bidang </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/users')}}" class="waves-effect">
                                    <i class="mdi mdi-account-edit-outline"></i>
                                    <span> User </span>
                                </a>
                            </li>

                            <div class="mb-5">&nbsp;</div>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid" >

                        @yield('main')

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->



                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">

                                2024 © DINSOS PROVINSI GORONTALO.
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{url('assets/admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('assets/admin/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{url('assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('assets/admin/libs/node-waves/waves.min.js')}}"></script>

        {{-- Text Editor --}}
        <script src="{{url('assets/admin/libs/tinymce/tinymce.min.js')}}"></script>
        <script src="{{url('assets/admin/js/pages/form-editor.init.js')}}"></script>

        {{-- Alertify --}}
        <script src="{{url('assets/admin/libs/alertify.js/js/alertify.js')}}"></script>
        <script src="{{url('assets/admin/js/pages/alertify-init.js')}}"></script>

        <script src="{{ url('assets/js/jquery.dataTables.min.js') }}"></script>


        <!-- Peity chart-->
        <script src="{{ url('assets/admin/libs/peity/jquery.peity.min.js') }}"></script>

        <!--C3 Chart-->
        <script src="{{ url('assets/admin/libs/d3/d3.min.js') }}"></script>
        <script src="{{ url('assets/admin/libs/c3/c3.min.js') }}"></script>

        <script src="{{ url('assets/admin/libs/jquery-knob/jquery.knob.min.js') }}"></script> 

        <script src="{{ url('assets/admin/js/pages/dashboard.init.js') }}"></script>

        {{-- <script src="{{ url('assets/admin/js/app.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{url('assets/admin/js/app.js')}}"></script>

        <script>
        $(document).ready(function(){
            $("#data").DataTable();
            $("#tabel_user").DataTable();
            $("#tabel_berita").DataTable();
            // $("#tabel_berita").DataTable({
            //     searching: false,
            //     paging: false,
            //     order: false
            // });

            getData();
                $('#tahun').change(function (e) { 
                    e.preventDefault();
                    getData();
                });
                
                $('#triwulan').change(function (e) { 
                    e.preventDefault();
                    getData();
                });

        })
   

            let url = '{{ url('kuesioner/ikm') }}';
            // alert(url);
            let tahun = $('#tahun').val();
            let triwulan = $('#triwulan').val();
            const ctx = document.getElementById('myChart'); 

            var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [],
                            datasets: [{
                                data: [],
                                borderWidth: 1,
                                label: 'IKM',
                            }]
                        },
                        options: {
                        scales: {
                            y: {
                            beginAtZero: true
                            }
                        }
                        }
                    }); 
            
      
                      

           function getData(){
            
                tahun = $('#tahun').val();
                triwulan = $('#triwulan').val();
                $.ajax({
                    type: "get",
                    url: url,
                    data: 'tahun='+tahun+'&triwulan='+triwulan,
                    dataType: "json",
                        success: function (response) {
                            $('#responden').html('Total responden: '+response.data.responden+' &nbsp;&nbsp;&nbsp;&nbsp;Triwulan: '+response.data.triwulan+'&nbsp;&nbsp;&nbsp;&nbsp; Tahun: '+response.data.tahun);

                            chart.clear();
                            chart.data.labels = response.data.labels;
                            chart.data.datasets[0].data = response.data.value;
                            chart.update();

                            let i = 0;
                            var html = '';

                            response.data.labels.forEach(element => {
                                if(i==0){
                                    html += '<tr>'
                                        +'<td class="py-2">'+element+'</td>'
                                        +'<td class="py-2" style="font-weight:500">'+response.data.value[i]+'</td>'
                                        +'<td class="py-2" style="font-weight:500">'+response.data.kategori[i]+'</td>'
                                        +'<td rowspan="9" class="text-center" style="vertical-align:middle; background: #d9eaf8; font-weight:500">'+response.data.unit+' %<br>('+response.data.huruf+' atau '+response.data.ket+')</td>'
                                    +'</tr>';
                                }else{
                                    html +='<tr>'
                                        +'<td class="py-2">'+element+'</td>'
                                        +'<td class="py-2" style="font-weight:500">'+response.data.value[i]+'</td>'
                                        +'<td class="py-2" style="font-weight:500">'+response.data.kategori[i]+'</td>'
                                    +'</tr>';
                                }

                                i++;
                            });

                            $('#tbody').html(html);
                            
                        }
                });
           }


            
          </script>






        @if(session()->has('success'))
		<script>
			$(document).ready(function () {
				alertify.success('{{ session('success') }}');
			});
		</script>
		@endif

		@if(session()->has('error'))
			<script>
				$(document).ready(function () {
					alertify.error('{{ session('error') }}');
				});
			</script>
		@endif

        @if(session()->has('warning'))
			<script>
				$(document).ready(function () {
					alertify.warning('{{ session('warning') }}');
				});
			</script>
		@endif

    </body>
</html>
