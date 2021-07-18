@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                <a href="{{ route('tambah.mahasiswa') }}" class="btn btn-md btn-outline-secondary float-right">TAMBAH DATA</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                    <tr>
                        <th>NO.</th>
                        <th>NPM</th>
                        <th>NAMA LENGKAP</th>
                        <th>TEMPAT, TANGGAL LAHIR</th>
                        <th>TELEPON</th>
                        <th>ALAMAT</th>
                        <th>JENIS KELAMIN</th>
                        <th>AKSI</th>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                    
                        <td>{{ $no++ }}</td>
                        <td>{{ $mhs->npm}}</td>
                        <td>{{ $mhs->user->name}}</td>
                        <td>{{ $mhs->tempat_lahir.', ' .$mhs->tgl_lahir }}</td>
                        <td>{{ $mhs->telepon }}</td>
                        <td>{{ $mhs->alamat }}</td>
                        <td>{{ $mhs->gender == 'L' ? 'Laki-laki' : 'Perempuan'}}</td>
                              
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('edit.mahasiswa', $mhs->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="{{ route('hapus.mahasiswa', $mhs->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
