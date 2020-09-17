@extends('layouts.master')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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

                    <center>
                        <h1 class="display-6">Kategori Buku</h1>
                    </center>
                    <hr class="my-2">
                    <a href="{{ url('kategori/create')}}" class="btn btn-primary mb-1">
                        Tambah Kategori Buku</a>
                    <table class="table" id="dataTables">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $kat)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kat->deskripsi }}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="" class="btn btn-danger  btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection