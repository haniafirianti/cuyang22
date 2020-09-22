@extends('layouts.master')

@section('content')

<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <center><a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal-create"><i class="fa fa-user-plus"></i> Tambah</a></center>
                	 <table id="dataTables" class="table table-striped" style="width:100%">

                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Pengguna</th>
                              <th>Email</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          	@foreach($users as $i=>$user)
                            <tr>
                              <td>{{ $i+1 }}</td>
                                <td><img class="rounded-circle mr-2" src='asset_user/{{ $user->avatar }}' style='width:40px;' alt="nOt Found">{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>
                              	<form action="{{ url('users/'.$user->id) }}" method="post">
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

<div class="modal inmodal fade" id="myModal-edit" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Edit User</h4>
          </div>
          <div class="modal-body">
            <form action="{{ url('users/update/'.$user->id) }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="new-password" class="col-md-8 control-label">Username</label>
                  <div class="col-md-12">
                      <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                      @error('name')
                          <label class="error mt-2 text-danger">
                              {{ $message }}
                          </label>
                      @enderror
                  </div>
              </div>
              <div class="form-group">
                  <label for="new-password" class="col-md-8 control-label">Email</label>
                  <div class="col-md-12">
                      <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                      @error('email')
                          <label class="error mt-2 text-danger">
                              {{ $message }}
                          </label>
                      @enderror
                  </div>
              </div>     
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="_method" value="PUT">Simpan</button>
          </div>
        </form> 
      </div>
  </div>
</div>

<div class="modal inmodal fade" id="myModal-create" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Tambah User</h4>
          </div>
          <div class="modal-body">
            <form action="{{ url('users') }}" method="post"  enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="new-password" class="col-md-8 control-label">Username</label>
                  <div class="col-md-12">
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                      @error('name')
                          <label class="error mt-2 text-danger">
                              {{ $message }}
                          </label>
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label for="new-password" class="col-md-8 control-label">Email</label>
                  <div class="col-md-12">
                      <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                      @error('email')
                          <label class="error mt-2 text-danger">
                              {{ $message }}
                          </label>
                      @enderror
                  </div>
              </div>  

              <div class="form-group">
                <label for="password"  class="col-md-8 control-label">Password</label>
                <div class="col-md-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <label for="password">Ulangi Password</label>
                
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
              </div>
            </div>


            <div class="form-group">
              <div class="col-md-12">
                <label for="cover_img">Avatar</label>
                <input type="file" name="avatar">

                </div>
                <div class="col-md-12">
                   @error('avatar')
                          <label class="error mt-2 text-danger">
                              {{ $message }}
                          </label>
                      @enderror
                </div>
            </div>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form> 
      </div>
  </div>
</div>

@endsection
