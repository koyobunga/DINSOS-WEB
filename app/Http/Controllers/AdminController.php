<?php

namespace App\Http\Controllers;

use App\Models\Populer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $populer = Populer::
             selectraw('count(*) as jlh, berita_id')
             ->groupBy('berita_id')
             ->orderby('jlh', 'desc')->limit(3)->get();

        return view('admin.index', [
            'title' => 'Dashboard',
            'populer' =>$populer
        ]);
    }
}
