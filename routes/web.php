<?php

use App\Http\Controllers\_BeritaController;
use App\Http\Controllers\_GaleriController;
use App\Http\Controllers\_GaleriDetController;
use App\Http\Controllers\Admin2Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleriDetController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\PublikasiDetController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Aset;
use App\Http\Middleware\Bidang;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);
Route::get('signin', [LoginController::class, 'index']);
Route::post('signin/auth', [LoginController::class, 'signin']);
Route::post('kontak/message', [LandingController::class, 'message']);
Route::get('galeri', [LandingController::class, 'galeri']);
Route::get('layanan', [LandingController::class, 'layanan']);
Route::get('profile/{profile:id}', [LandingController::class, 'profile']);
Route::get('publikasi/{publikasi:id}', [LandingController::class, 'publikasi']);
Route::get('publikasi_det/{publikasi_det:id}/download', [LandingController::class, 'publikasi_download']);
Route::get('faq', [LandingController::class, 'faq']);
Route::get('kontak', [LandingController::class, 'kontak']);
Route::get('berita', [LandingController::class, 'berita']);
Route::get('berita/{berita:slug}', [LandingController::class, 'berita_show']);

Route::get('kuesioner', [LandingController::class, 'kuesioner']);
Route::post('kuesioner/post', [KuesionerController::class, 'store']);
Route::post('kuesioner/sukse', [KuesionerController::class, 'sukses']);

Route::get('kuesioner/ikm', [KuesionerController::class, 'ikm_load']);



Route::middleware(Admin::class)->group(function(){
    Route::get('admin', [AdminController::class, 'index']);

    Route::get('admin/signout', [LoginController::class, 'signout']);
    Route::resource('admin/layanans', LayananController::class);
    Route::resource('admin/galeris', GaleriController::class);
    Route::resource('admin/galeri_dets', GaleriDetController::class);
    Route::post('admin/galeri/editlabel', [GaleriController::class, 'update']);
    Route::get('admin/galeri_det/{galeri}', [GaleriDetController::class, 'index']);

    Route::resource('admin/beritas', BeritaController::class);
    Route::resource('admin/publikasis', PublikasiController::class);
    Route::post('admin/publikasis/editnama', [PublikasiController::class, 'update']);
    Route::resource('admin/publikasi_dets', PublikasiDetController::class);
    Route::get('admin/publikasi_det/{publikasi}', [PublikasiDetController::class, 'index']);

    Route::resource('admin/aplikasis', AplikasiController::class);

    Route::resource('admin/users', UserController::class);

    Route::resource('admin/profiles', ProfileController::class);
    Route::resource('admin/faqs', FaqController::class);
    
    Route::resource('admin/pesans', PesanController::class);
    

    Route::resource('admin/bidangs', BidangController::class);
    Route::post('admin/bidangs/editnama', [BidangController::class, 'update']);

});

Route::middleware(Bidang::class)->group(function(){
    Route::get('bidang/signout', [LoginController::class, 'signout']);
    Route::get('bidang', [Admin2Controller::class, 'index']);
    Route::resource('bidang/galeris', _GaleriController::class);
    Route::resource('bidang/galeri_dets', _GaleriDetController::class);
    Route::post('bidang/galeri/editlabel', [_GaleriController::class, 'update']);
    Route::get('bidang/galeri_det/{galeri}', [_GaleriDetController::class, 'index']);

    Route::resource('bidang/beritas', _BeritaController::class);
    Route::resource('bidang/asets', AsetController::class);
    Route::resource('bidang/items', ItemController::class);
    Route::get('bidang/aset/print', [Admin2Controller::class, 'print']);
});
