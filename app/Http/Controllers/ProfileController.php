<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
       $data = Profile::orderbydesc('id')->paginate(10)->withQueryString();

        return view('admin.profile.index', [
            'title' => 'Profile',
            'data' => $data,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profile.create', [
            'title' => 'Tambah Berita'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama' => 'required',
            'ket' => 'required',
        ]);

        if(Profile::create($valid))
            return redirect('admin/profiles')->with('success','Baerhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');

    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        dd($profile);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {

        return view('admin.profile.edit', [
            'title' => 'Edit Profile',
            'data' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $valid = $request->validate([
            'nama' => 'required',
            'ket' => 'required',
        ]);

        if(Profile::find($profile->id)->update($valid))
            return redirect('admin/profiles')->with('success','Baerhasil menyimpan ');
        return back()->with('error','Gagal menyimpan ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        if(Profile::destroy($profile->id)){
            return back()->with('error', 'Profile dihapus');
        }
        return back()->with('error', 'Gagal hapus');
    }}
