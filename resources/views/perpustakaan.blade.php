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
                    <h1 class="display-4">Selamat Datang!</h1>

                    <p class="lead">Ini adalah contoh
                        perpustakaan created_by <a href="https://www.facebook.com/ahmadsuherman.ahmadsuherman.332">Ahmad Suherman</a></p>
                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection