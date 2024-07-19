<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use App\Models\Berita;
use App\Models\Faq;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Pesan;
use App\Models\Populer;
use App\Models\Profile;
use App\Models\Publikasi;
use App\Models\Publikasi_det;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        $layanan = Layanan::orderbydesc('id')->limit(3)->get();
        $berita = Berita::orderbydesc('id')->limit(3)->get();
        $aplikasi = Aplikasi::all();
        $galeri = Galeri::orderbydesc('id')->limit(6)->get();;
        $publikasi = Publikasi::all();
        $profile = Profile::all();
        return view('home', [
            'title' => 'DINSOS PROVINSI GORONTALO',
            'layanan' => $layanan,
            'berita' => $berita,
            'aplikasi' => $aplikasi,
            'galeri' => $galeri,
            'publikasi' => $publikasi,
            'profile' => $profile,
        ]);
    }

    public function kuesioner(){
        $aplikasi = Aplikasi::all();
        $galeri = Galeri::orderbydesc('id')->limit(6)->get();;
        $publikasi = Publikasi::all();
        $profile = Profile::all();  
        return view('home.kuesioner', [
            'title' => 'Kuesioner Survei',
            'aplikasi' => $aplikasi,
            'galeri' => $galeri,
            'publikasi' => $publikasi,
            'profile' => $profile,
        ]);
    }

    public function berita(Request $request){
        $aplikasi = Aplikasi::all();
        $publikasi = Publikasi::all();
        $profile = Profile::all();

        $arsip= Berita::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->limit(10)
            ->get();

        $populer = Populer::
             selectraw('count(*) as jlh, berita_id')
             ->groupBy('berita_id')
             ->orderby('jlh', 'desc')->limit(6)->get();

             if(!empty($request->search)){
                 $data = Berita::where('label','like', '%'.$request->search.'%')->orderbydesc('id')->paginate(6)->withQueryString();
            }else if(!empty($request->bulan)){
                $data = Berita::whereMonth('created_at', date_parse($request->bulan)['month'])->whereYear('created_at', $request->tahun)->paginate(6)->withQueryString();
                // dd($data[0]);
            }else{
                $data = Berita::orderbydesc('id')->paginate(10)->withQueryString();
             }

        $share = \Share::page(url('berita'))
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view('home.berita', [
            'title' => 'Berita',
            'data' => $data,
            'aplikasi' => $aplikasi,
            'publikasi' => $publikasi,
            'profile' => $profile,
            'populer' => $populer,
            'arsip' => $arsip,
            'share' => $share,
            'data_share' => $data[0],
        ]);
    }

    public function berita_show(Berita $berita){
        Populer::create(['berita_id' => $berita->id]);
        $populer = Populer::
             selectraw('count(*) as jlh, berita_id')
             ->groupBy('berita_id')
             ->orderby('jlh', 'desc')->limit(6)->get();

        $terkini = Berita::orderbydesc('id')->paginate(6)->withQueryString();

        // Data menu
        $aplikasi = Aplikasi::all();
        $publikasi = Publikasi::all();
        $profile = Profile::all();

        $arsip= Berita::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->limit(10)
            ->get();

            $share = \Share::page(url('berita'), $berita->label)
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view('home.berita_show', [
            'title' => $berita->label,
            'data' => $berita,
            'aplikasi' => $aplikasi,
            'publikasi' => $publikasi,
            'profile' => $profile,
            'populer' => $populer,
            'terkini' => $terkini,
            'arsip' => $arsip,
            'share' => $share,
            'data_share' => $berita
        ]);
    }

    public function galeri(Request $request){
         // Data menu
         $aplikasi = Aplikasi::all();
         $galeri = Galeri::all();
         $publikasi = Publikasi::all();
         $profile = Profile::all();

         if($request->show)
            $galeri = Galeri::where('id', $request->show)->first();

         return view('home.galeri', [
            'title' => 'Kegiatan',
            'aplikasi' => $aplikasi,
            'galeri' => $galeri,
            'publikasi' => $publikasi,
            'profile' => $profile,
         ]);
    }

    public function layanan(Request $request){
         // Data menu
         $aplikasi = Aplikasi::all();
         $publikasi = Publikasi::all();
         $profile = Profile::all();

         $layanan = Layanan::all();

         if($request->show)
            $layanan = Layanan::where('id', $request->show)->first();


         return view('home.layanan', [
            'title' => 'Kegiatan',
            'aplikasi' => $aplikasi,
            'publikasi' => $publikasi,
            'profile' => $profile,
            'layanan' => $layanan,
         ]);
    }

    public function profile(Request $request, Profile $profile){
        // Data menu
        $aplikasi = Aplikasi::all();
        $publikasi = Publikasi::all();
        $profile_menu = Profile::all();
        return view('home.profile', [
           'title' => 'Profile',
           'aplikasi' => $aplikasi,
           'publikasi' => $publikasi,
           'profile' => $profile_menu,
           'data' => $profile
        ]);
   }

   public function faq(){
        // Data menu
        $aplikasi = Aplikasi::all();
        $publikasi = Publikasi::all();
        $profile = Profile::all();

        return view('home.faq', [
        'title' => 'FAQ',
        'aplikasi' => $aplikasi,
        'publikasi' => $publikasi,
        'profile' => $profile,
        'data' => Faq::first()
        ]);
    }

    public function publikasi(Publikasi $publikasi){
        // Data menu
        $aplikasi = Aplikasi::all();
        $publikasi_menu = Publikasi::all();
        $profile = Profile::all();
        return view('home.publikasi', [
           'title' => 'Publikasi',
           'aplikasi' => $aplikasi,
           'publikasi' => $publikasi_menu,
           'profile' => $profile,
           'data' => $publikasi
        ]);
   }
    public function kontak(){
        // Data menu
        $aplikasi = Aplikasi::all();
        $publikasi = Publikasi::all();
        $profile = Profile::all();
        return view('home.kontak', [
           'title' => 'Publikasi',
           'aplikasi' => $aplikasi,
           'publikasi' => $publikasi,
           'profile' => $profile,
        ]);
   }

   public function publikasi_download(Publikasi_det $publikasi_det){
        return response()->download(public_path('dokumens/publikasi/'.$publikasi_det->nm_file));
   }

    public function message(Request $request){
        $valid = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required'
        ]);

        if(Pesan::create($valid))
            return back()->with('pesan', 'Pesan Anda telah dikirim..');
        return back()->with('pesan', 'Gagal kirim pesan..');

    }
}
