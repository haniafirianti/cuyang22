@extends('layouts.master')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('perpustakaan')}}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-item nav-link" href="{{ url('anggota')}}">Anggota</a>
                    <a class="nav-item nav-link" href="{{ url('kategori')}}">Kategori Buku</a>
                    <a class="nav-item nav-link" href="{{ url('buku')}}">Daftar Buku</a>
                    <a class="nav-item nav-link" href="{{ url('transaksi')}}">Transaksi</a>


                </div>
            </div>
        </nav>
        @if(session('msg'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{session('msg')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <center><h1 class="display-6">Data Anggota</h1></center>
        <hr class="my-2">
        <a href="{{ url('anggota/create')}}" class="btn btn-primary">
            Tambah Anggota</a>
        <table class="table" id="dataTables">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $ang)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ang->nama_anggota }}</td>
                    <td>{{ $ang->alamat }}</td>
                    <td>{{ $ang->jenis_kelamin }}</td>
                    <td>{{ $ang->email }}</td>
                    <td>{{ $ang->no_telp }}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <a href="" class="btn btn-danger  btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection