@extends('layouts.master')

@section('content')

<div class="main-content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">

          <div class="card-header">
            <center><a href="{{ url('products/create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Products</a></center>
          </div>


          <table id="dataTables" class="table table-striped" style="width:100%">

            <thead>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <!-- <th>Kode Barang</th>
                <th>Harga</th> -->
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $i => $product)
              <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->categories->category_name }}</td>
                <!-- 
                <td>{{ $product->product_code }}</td>
                <td>{{ $product->product_price }}</td> -->

                <td>
                  <form action="{{ url('products/'.$product->id) }}" method="post">
                    <a href="{{ url('products/show/'.$product->id) }}" type="button" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-edit"><i class="fa fa-edit"></i></button>
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

@endsection