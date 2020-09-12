@extends('layouts.main')
@section('title', 'Laravel - SI Perpustakaan')
@section('content')
<div class="container">
    <div class="jumbotron">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h1 class="display-6">Tambah Kategori Buku</h1>
        <hr class="my-4">
        <form action="{{ url('kategori')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="{{ old('deskripsi') }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>


@endsection