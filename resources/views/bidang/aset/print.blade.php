<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap Css -->
    <link href="{{ url('assets/admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('assets/admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <link href="{{ url('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">
</head>

<body style="background-color: #fff">
    <div class="page-description">


        <div class="mt-3">
            <div class="">

                <div class="text-center h3">DATA ASET</div>
                <div class="text-center h5">DINAS SOSIAL PROVINSI GORONTALO</div>

                <div class="mt-5"></div>
                @if(request('semua'))
                <div class="text-center" style="text-transform: uppercase;"><u>SEMUA ASET</u></div>
                @else
                <div class="text-center " style="text-transform: uppercase;"><u>{{ Auth::user()->bidang->nama }}</u>
                </div>
                @endif

                <div class="table-responseve" style="font-size: 12px">

                    @if(request('semua'))

                    @foreach ($bidang as $b)
                        <div class="" style="font-weight: bold">{{ $b->nama }}</div>
                        <table class="table mb-4 mt-2 table-centered"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr style="font-size: 13px">
                                    <th>#</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Merk</th>
                                    <th>Satuan</th>
                                    <th>Jumlah</th>
                                    <th>Kondisi</th>
                                    <th>Desc</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($b->aset as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->kode }}</td>
                                    <td>{{ $d->item->nama }}</td>
                                    <td>{{ $d->merk }}</td>
                                    <td>{{ $d->satuan }}</td>
                                    <td>{{ $d->jumlah}}</td>
                                    <td>{{ $d->kondisi }}</td>
                                    <td>
                                        @if($d->no_pol) <div class="mr-3">Nomor Polisi. {{ $d->no_pol }}</div> @endif
                                        @if($d->no_mesin) <div class="mr-3">Nomor Mesin. {{ $d->no_mesin }}</div> @endif
                                        @if($d->no_rangka) <div class="">Nomor Rangka. {{ $d->no_rangka }}</div> @endif
                                        {{ $d->ket }}
                                    </td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        @endforeach

                    

                    @else
                        <table class="table my-3 table-centered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr style="font-size: 13px">
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Merk</th>
                                <th>Satuan</th>
                                <th>Jumlah</th>
                                <th>Kondisi</th>
                                <th>Desc</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->kode }}</td>
                                <td>{{ $d->item->nama }}</td>
                                <td>{{ $d->merk }}</td>
                                <td>{{ $d->satuan }}</td>
                                <td>{{ $d->jumlah}}</td>
                                <td>{{ $d->kondisi }}</td>
                                <td>
                                    @if($d->no_pol) <div class="mr-3">Nomor Polisi. {{ $d->no_pol }}</div> @endif
                                    @if($d->no_mesin) <div class="mr-3">Nomor Mesin. {{ $d->no_mesin }}</div> @endif
                                    @if($d->no_rangka) <div class="">Nomor Rangka. {{ $d->no_rangka }}</div> @endif
                                    {{ $d->ket }}
                                </td>

                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    @endif

                </div>

                {{-- {{ $berita->links() }} --}}

            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{url('assets/admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/admin/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{url('assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{url('assets/admin/libs/node-waves/waves.min.js')}}"></script>

    <script>
        window.print();
    </script>
</body>

</html>