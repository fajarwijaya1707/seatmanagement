<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $data_mhs = \App\Mahasiswa::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%")
                ->orWhere('nim', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data_mhs->appends($request->only('keyword'));
        return view('mahasiswa.index',['data_mhs' => $data_mhs]);
    }

    public function create(Request $request)
    {
        \App\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success','Data berhasil diinput!');
    }

    public function edit($id)
    {
        $mhs = \App\Mahasiswa::find($id);
        return view('mahasiswa.edit',['mhs' => $mhs]);
    }

    public function update(Request $request,$id)
    {
        $mhs = \App\Mahasiswa::find($id);
        $mhs->update($request->all());
        return redirect('/mahasiswa')->with('success','Data berhasil diupdate!');
    }
    public function hapus($id)
    {
        $mhs = \App\Mahasiswa::find($id);
        $mhs->delete();
        return redirect('/mahasiswa')->with('success','Data Mahasiswa Berhasil Di Hapus');
    }
    
}
