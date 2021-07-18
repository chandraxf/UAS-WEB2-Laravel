<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Makul;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index() {
        $nilai = Nilai::with(['mahasiswa', 'makul'])->get(); 
        return view('nilai.index', compact('nilai'));
    }
    public function create(){
        $mhs = Mahasiswa::all();
        $mkl = Makul::all();
        return view ('nilai.create', compact(['mhs','mkl']));
    }
    public function store(Request $request){
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }
    public function edit($id){ 
        
        $mkl = Makul::all();
        $mhs = Mahasiswa::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'mkl', 'mhs'));
    }
    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data sudah diUpdate','success');
        return redirect()->route('nilai');
    }

    public function del($id){
        $nilai = Nilai::find($id);
        $nilai->delete($id);
        toast('Data bsudah diHapus','success');
        return redirect()->route('nilai');
    }
}