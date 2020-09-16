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

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h1 class="display-6">Pinjam Buku</h1>
        <hr class="my-4">
        <form action="{{ action('TransaksiController@update', $pinjaman->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="type_transaksi">Type Transaksi</label>
                <select class="form-control" id="type_transaksi" name="type_transaksi">
                    <option value="kembali">Kembali</option>
                </select>
            </div>
            <div class="form-group">
                <label for="id_buku">Kode Buku</label>
                <input type="text" class="form-control" id="id_buku" name="id_buku" value="{{ $pinjaman->id_buku }}" readonly="true">
            </div>
            <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ $pinjaman->judul_buku }}" readonly="true">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Buku</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $pinjaman->deskripsi }}" readonly="true">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori Buku</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $pinjaman->kategori }}" readonly="true">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="kategori">Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="tgl_pinjam" value="{{ $pinjaman->tgl_pinjam }}" readonly="true">
                    </div>
                    <div class="col-sm-6">
                        <label for="kategori">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kembali">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="id_anggota">ID Anggota Peminjam</label>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="{{ $pinjaman->id_anggota }}" readonly="true">
            </div>
            <div class="form-group">
                <label for="nama_anggota">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" readonly="true" value="{{ $pinjaman->nama_anggota }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

<script>
    $(function() {
        $('#id_buku').on('change', function(e) {
            let id_buku = $('#id_buku').val();
            console.log(id_buku);
            let url = $(this).data('url') + '/transaksi/showBuku/' + id_buku;
            console.log(url);
            getBuku(url);
        })
        $('#id_anggota').on('change', function(e) {
            let id_anggota = $('#id_anggota').val();
            console.log(id_anggota);
            let url = $(this).data('url') + '/transaksi/getAnggota/' + id_anggota;
            console.log(url);
            getAnggota(url);
        })
    })

    function getBuku(url) {
        $.getJSON(url, function(data) {
            if (data === false) {
                alert('Buku tidak ditemukan!');
                $('#id_buku').val("");
            } else {
                $('#judul_buku').val(data[0].judul_buku);
                $('#deskripsi').val(data[0].deskripsi);
                $('#kategori').val(data[0].kategori);
            }
        });
    }

    function getAnggota(url) {
        $.getJSON(url, function(data) {
            if (data === false) {
                alert('Data anggota tidak ditemukan!');
                $('#id_anggota').val("");
                $('#nama_anggota').val("");
            } else {
                $('#nama_anggota').val(data.nama_anggota);
            }
        });
    }
</script>
@endsection