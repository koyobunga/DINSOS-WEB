@extends('layouts.landing2')
@section('main')
<div class="container ms-auto" style="margin-top: 130px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a class="btn btn-sm btn-custom" href="#">FAQ</a></li> --}}
                <li class="breadcrumb-item active btn btn-sm" aria-current="page">KUESIONER</li>
        </ol>
      </nav>
    <div class="row mt-4" style="min-height: 700px">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <h5 class="card-title text-center">KUESIONER SURVEI KEPUASAN MASYARAKAT</h5>
                            <h6 class="card-title mb-5 text-center">TAHUN {{ date('Y') }}</h6>
                            <form action="{{ url('kuesioner/post') }}" method="POST">
                              @csrf
                              @method('post')
                                <div class="card p-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal</label>
                                                <input required name="tanggal" type="date" class="form-control" value="{{ old('tanggal', date('mm/dd/yyyy')) }}"  placeholder="Tanggal">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>Waktu</div>
                                            <div class="form-check form-check-inline mt-3">
                                                <input required class="form-check-input" type="radio" name="waktu" id="inlineRadio1" value="1">
                                                <label class="form-check-label" for="inlineRadio1">08:00 - 12:00</label>
                                            </div>
                                            <div class="form-check form-check-inline ml-3">
                                                <input class="form-check-input" type="radio" name="waktu" value="2" id="inlineRadio2">
                                                <label class="form-check-label" for="inlineRadio2">13:00 - 17:00</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card p-3 mt-3">
                                    <div class="h6">Profile Responden</div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama</label>
                                                <input required name="nama" type="text" class="form-control" value="{{ old('nama') }}" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                <select name="jenkel" id="" required class="form-control">
                                                    <option value="">Pilih</option>
                                                    <option @if(old('jenkel') == 'L') selected @endif value="L">Laki-laki</option>
                                                    <option @if(old('jenkel') == 'P') selected @endif value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Usia</label>
                                                <input required name="usia" type="number" class="form-control" value="{{ old('usia') }}" placeholder="Usia">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pendidikan</label>
                                                <select name="pendidikan" id="" required class="form-control">
                                                    <option value="">Pilih</option>
                                                    <option @if(old('pendidikan') == 'SD') selected @endif value="SD">SD</option>
                                                    <option @if(old('pendidikan') == 'SMP') selected @endif value="SMP">SMP</option>
                                                    <option @if(old('pendidikan') == 'SMA') selected @endif value="SMA">SMA</option>
                                                    <option @if(old('pendidikan') == 'S1') selected @endif value="S1">S1</option>
                                                    <option @if(old('pendidikan') == 'S2') selected @endif value="S2">S2</option>
                                                    <option @if(old('pendidikan') == 'S3') selected @endif value="S3">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pekerjaan</label>
                                                <select name="pekerjaan" id="" required class="form-control">
                                                    <option value="">Pilih</option>
                                                    <option @if(old('pekerjaan') == 'PNS') selected @endif value="PNS">PNS</option>
                                                    <option @if(old('pekerjaan') == 'TNI') selected @endif value="TNI">TNI</option>
                                                    <option @if(old('pekerjaan') == 'Polri') selected @endif value="Polri">Polri</option>
                                                    <option @if(old('pekerjaan') == 'Swasta') selected @endif value="Swasta">Swasta</option>
                                                    <option @if(old('pekerjaan') == 'Wirausaha') selected @endif value="Wirausaha">Wirausaha</option>
                                                    <option @if(old('pekerjaan') == 'Lainnya') selected @endif value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card p-3 mt-3">
                                    <div class="h6">PENDAPAT RESPONDEN TENTANG PELAYANAN</div>
                                    <div class="small" style="margin-top: -10px">(Pilih jawaban yang sesuai)</div>
                                    
                                    <table class="table mt-3">
                                        <tr>
                                            <td class="px-0" style ="width: 10px">1)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya? 
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u1" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Tidak sesuai
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u1" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Kurang sesuai
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u1" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sesuai
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u1" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sangat sesuai
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-0" style ="width: 10px">2)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini?
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u2" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Tidak mudah
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u2" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Kurang mudah
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u2" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Mudah
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u2" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sangat mudah
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-0" style ="width: 10px">3)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pemahaman saudara tentang kecepatan waktu dalam memberikan pelayanan?
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u3" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Tidak cepat
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u3" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Kurang cepat
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u3" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Cepat
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u3" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sangat cepat
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-0" style ="width: 10px">4)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pemahaman saudara tentang kewajaran biaya/tarif dalam pelayanan?
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u4" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Tidak mahal
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u4" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Kurang mahal
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u4" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Mahal
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u4" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sangat mahal
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-0" style ="width: 10px">5)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pemahaman saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u5" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Tidak sesuai
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u5" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Kurang sesuai
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u5" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sesuai
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u5" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sangat sesuai
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-0" style ="width: 10px">6)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pemahaman saudara tentang kompetensi/kemampuan petugas dalam pelayanan?
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u6" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Tidak kompeten
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u6" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Kurang kompeten
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u6" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Kompeten
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u6" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sangat kompeten
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-0" style ="width: 10px">7)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pemahaman saudara mengenai perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u7" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Tidak sopan dan ramah
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u7" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Kurang sopan dan ramah
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u7" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sopan dan ramah
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u7" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sangat sopan dan ramah
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-0" style ="width: 10px">8)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pemahaman saudara tentang kualitas sarana dan prasarana?
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u8" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Buruk
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u8" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Cukup
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u8" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Baik
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u8" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Sangat baik
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-0" style ="width: 10px">9)</td>
                                            <td>
                                                <div class="mb-2" style="font-weight: 500">
                                                    Bagaimana pemahaman saudara tentang penanganan pengaduan pangguna layanan?
                                                </div>
                                                  <div class="form-check">
                                                    <input required class="form-check-input" type="radio" name="u9" id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                      Tidak ada
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u9" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Ada tapi tidak berfungsi
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u9" id="exampleRadios2" value="3">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Berfungsi kurang maksimal
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="u9" id="exampleRadios2" value="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                      Dikelola dengan baik
                                                    </label>
                                                  </div>
                                            </td>
                                        </tr>

                                    </table>
                                    <label for="">Berikan Saran dan Masukkan:</label>
                                    <textarea required name="saran" id="" rows="3" placeholder="Saran dan masukkan.." class="form-control"></textarea>
                                </div>
                                <div class="text-right mt-2 mb-2">
                                    <button type="submit" class="btn btn-success px-4 py-3 "> Kirim data <i class=" ion ion-md-send ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
@endsection
