<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_siswa = \App\Siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();	
    	}else {
    	$data_siswa = \App\Siswa::all();
    	}
    	return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        //dd($request->all());
    	$siswa = \App\Siswa::create($request->all());
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $siswa->gambar = $request->file('gambar')->getClientOriginalName();
            $siswa->save();
        }
        
    	return redirect('/siswa')->with('sukses','Data berhasil ditambahakan!');
    }

    public function edit($id)
    {
    	$siswa = \App\Siswa::find($id);
    	return view('/siswa/edit',['siswa'=>$siswa]);

    }

    public function update(Request $request,$id)
    {
    	$siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $siswa->gambar = $request->file('gambar')->getClientOriginalName();
            $siswa->save();
        }
    	
    	return redirect('/siswa')->with('sukses','Data berhasil diperbarui');
    }
    public function delete($id)
    {
    	$siswa = \App\Siswa::find($id);
    	$siswa->delete($siswa);
    	return redirect('/siswa')->with('sukses','Data berhasil dihapus!');

    }

    public function detail($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('dashboards.detail',['siswa' => $siswa]);
    }
}
