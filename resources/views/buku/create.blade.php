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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <center>
                        <h1 class="display-6">Tambah Data Buku</h1>
                    </center>
                    <hr class="my-4">
                    <form action="{{ url('buku')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku" value="{{ old('judul_buku') }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Buku</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Buku" value="{{ old('deskripsi') }}">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori Buku</label>
                            <select class="form-control" id="kategori" name="kategori">
                                @foreach ($kategori as $kat)
                                <option value="{{ $kat->kategori }}">
                                    {{ $kat->deskripsi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cover_img">Cover Buku</label>
                            <input type="file" name="cover_img">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection