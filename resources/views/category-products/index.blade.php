@extends('layouts.master')

@section('content')

<div class="main-content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
            
          <div class="card-header">
            <center><a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal-create"><i class="fa fa-user-plus"></i> Tambah</a></center>
          </div>
          <table id="dataTables" class="table table-striped" style="width:100%">

            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kategori Barang</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $i=>$category)
              <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $category->category_name }}</td>
                <td>
                  <form action="{{ url('category-products/'.$category->id) }}" method="post">              
                    
                    <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                  </form>
                </td>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal inmodal fade" id="myModal-create" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Tambah Kategori Produk</h4>
          </div>
          <div class="modal-body">
            <form action="{{ url('category-products') }}" method="post"  enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="new-password" class="col-md-8 control-label">Nama Kategory</label>
                  <div class="col-md-12">
                      <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}">
                      @error('category_name')
                          <label class="error mt-2 text-danger">
                              {{ $message }}
                          </label>
                      @enderror
                  </div>
              </div>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Simpan">
          </div>
        </form> 
      </div>
  </div>
</div>

@endsection