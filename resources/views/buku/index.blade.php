@extends('layouts.master')
@section('title', 'Laravel - SI Perpustakaan')
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

        <center><h1 class="display-6">Data Buku</h1></center>
        <hr class="my-2">
        <a href="{{ url('buku/create')}}" class="btn btn-primary mb-1">Tambah Buku</a>
        <table class="table" id="dataTables">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Deskripsi Buku</th>
                    <th scope="col">Kategori Buku</th>
                    <th scope="col">Cover Buku</th>
                    <th> Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $buku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buku->judul_buku }}</td>
                    <td>{{ $buku->deskripsi }}</td>
                    <td>{{ $buku->kategori }}</td>
                    <td><img src='image/{{ $buku->cover_img }}' style='width:80px; height:50px;'></td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <a href="" class="btn btn-danger  btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection