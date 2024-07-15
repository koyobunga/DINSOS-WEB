<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleriDetController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\PublikasiDetController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
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

    Route::resource('admin/bidangs', BidangController::class);
    Route::post('admin/bidangs/editnama', [BidangController::class, 'update']);

});
