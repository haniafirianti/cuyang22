@extends('layouts.master')

@section('content')

<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('products') }}" method="post">
                        @csrf
                        <center><h3>Tambah Produk</h3></center>
                        <h4 class="card-title">Informasi Produk</h4>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Nama Barang</label>
                                </div>
                                <div class="col-lg-10">
                                    <input class="form-control"  name="product_name" type="text">
                                     @error('product_name')
                                    <label class="error mt-2 text-danger">
                                        {{ $message }}
                                    </label>
                                    @enderror
                                </div>
                               
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Code Barang</label>
                                </div>
                                <div class="col-lg-10">
                                    <input class="form-control" value="{{$code}}" name="item[product_price]" type="text" disabled="">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Kategori</label>
                                </div>
                                <div class="col-lg-10">
                                    <select type="text" name="product_category_id" class="form-control select">
                                        <option selected="" disabled="">-- Pilih Kategory --</option>
                                         @foreach($categories as $sp)
                                            <option value="{{ $sp->id }}">{{$sp->category_name}}</option>
                                        @endforeach
                                        
                                      </select>
                                      @error('product_category_id')
                                        <label class="error mt-2 text-danger">
                                            {{ $message }}
                                        </label>
                                        @enderror
                                </div>
                            </div>



                             <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Deskripsi</label>
                                </div>
                                <div class="col-lg-10">
                                    <textarea name="item[product_description]" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Stok</label>
                                </div>
                                <div class="col-lg-10">
                                    <input class="form-control" name="item[product_stock]" type="number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Harga</label>
                                </div>
                                <div class="col-lg-10">
                                    <input class="form-control" name="item[product_price]" type="number">
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Asal Produk</label>
                                </div>
                                <div class="col-lg-10">
                                    <select type="text" name="item[product_from]" required="" class="form-control select" required="">
                                        <option selected="" disabled="">-- Pilih Produk asal --</option>
                                        <option value="import">Import</option>
                                        <option value="lokal">Lokal</option>                     
                                      </select>
                                      
                                </div>
                            </div>

                            

                           <!--  <h4 class="card-title">Pengaturan Media</h4>
                             <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Image</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="custom-file">
                                        <input type="file" class="form-control-file" name="avatar[]" data-date-multidate="true" aria-describedby="fileHelp">
                                    </div>
                                </div>
                            </div>


                            <h4 class="card-title">Pengiriman</h4>
                             <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Berat</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-warning" type="button">Gram</button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Ukuran Paket</label>
                                </div>
                                <div class="form-row col-lg-3">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" placeholder="P">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">cm</button>
                                        </span>
                                    </div>
                                </div> 

                                <div class="form-row col-lg-3">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" placeholder="L">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">cm</button>
                                        </span>
                                    </div>
                                </div> 

                                <div class="form-row col-lg-3">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" placeholder="T">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">cm</button>
                                        </span>

                                    </div>
                                </div> 
                            </div>

                             <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Ongkos Kirim</label>
                                </div>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                             <h4 class="card-title">Lainnya</h4>
                             <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Pre Order</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="mt-3">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Tidak </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Ya</label>
                                                </div>
                                            </div>
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label">Kondisi</label>
                                </div>
                                <div class="col-lg-10">
                                    <select type="text" name="" required="" class="form-control select">
                                     
                                        <option value="">Baru</option>
                                        <option value="">Sudah Di Pakai</option>
                                        
                                        
                                      </select>
                                </div>
                            </div>
 -->
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label class="col-form-label"></label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="submit" value="Simpan" class="btn btn-rounded btn-outline-info">
                                    <button type="reset" class="btn btn-rounded btn-outline-danger">Batal</button>
                                </div>
                            </div>
                            
                    </form>
                                    
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


