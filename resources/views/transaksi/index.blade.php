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
        <center><h1 class="display-6">Data Peminjaman Buku</h1></center>
        <hr class="my-2">
        <a href="transaksi/create" class="btn btn-primary mb-1">
            Peminjaman Buku</a>
        <!-- <a href="buku/kembali" class="btn btn-primary mb-1">Pengembalian Buku</a>        -->
        <table class="table" id="dataTables">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No. Peminjaman</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Deskripsi Buku</th>
                    <th scope="col">Kategori Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $trans)
                <tr>
                    <td>{{ $trans->id }}</td>
                    <td>{{ $trans->judul_buku }}</td>
                    <td>{{ $trans->deskripsi }}</td>
                    <td>{{ $trans->kategori }}</td>
                    <td>{{ $trans->tgl_pinjam }}</td>
                    <td>{{ $trans->tgl_kembali }}</td>
                    <td>
                        @if($trans->tgl_kembali == null)
                        <a href="transaksi/edit/{{ $trans->id }}" class="btn btn-primary btn-sm">Pengembalian</a>
                        @else
                        <p class="btn btn-success btn-sm">Dikembalikan</p>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection