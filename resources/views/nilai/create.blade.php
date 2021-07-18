@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Nilai</div>
                    <div class="card-body">
                    <form action="{{ route('simpan.nilai') }}" method="post">
                    @csrf
                        <div class="form-group">
                        <div class="form-row">
                        <label class="col-md-4 text-md-right" for="user_id">Nama Mahasiswa</label>
                            <div class="col-md-8">
                        <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                        <option value="" disabled selected>-- Pilih User --</option>
                        @foreach ($mhs as $u)
                            <option value="{{ $u->user_id }}">{{ $u->user->name }}</option>
                        @endforeach
                        </select>
                            </div>
                        </div>
                     </div>
                     <div class="form-group">
                     <div class="form-row">
                        <label class="col-md-4 text-md-right" for="user_id">Nama Matakuliah</label>
                            <div class="col-md-8">
                        <select name="makul_id" id="makul_id" class="form-control">
                        <option value="" disabled selected>-- Pilih Matakuliah --</option>
                        @foreach ($mkl as $k)
                            <option value="{{ $k->id }}">{{ $k->nama_makul}}</option>
                        @endforeach
                        </select>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                     <div class="form-row">
                         <label class="col-md-4 text-md-center pl-4" for="nilai">Nilai</label>
                            <div class="col-md-4">
                                <input type="number" name="nilai" class="form-control" placeholder="Masukan nilai ...">
                            </div>
                        </div>
                        </div>

                     <div class="form-group">
                         <div class="form-row float-right">
                         <div class="col">
                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">KEMBALI</a>
                            </div>
                         </div>
                     </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
