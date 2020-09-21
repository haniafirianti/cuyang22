@extends('layouts.master')

@section('content')

<div class="main-content">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ url('change-password') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="new-password" class="col-md-8 control-label">Masukan Password Lama</label>
                            <div class="col-md-12">
                                <input id="current-password" type="password" class="form-control" name="current-password">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password" class="col-md-8 control-label">Masukan Password Baru</label>

                            <div class="col-md-12">
                                <input id="new-password" type="password" class="form-control" name="new-password">
                                 @error('new-password')
                                    <label class="error mt-2 text-danger">
                                        Password Min 8 Karakter
                                    </label>
                                @enderror
                            </div>
                           
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-8 control-label">Ulangi Password Baru</label>

                            <div class="col-md-12">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
             
                        <div class="row justify-content-center">
                            <form action="{{ url('profile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">

                                    <center>
                                        
                                    <img src="{{ url('asset_user/'.$user->avatar)}}" class="img-thumbnail" id="profile_pic" style="object-fit: cover; height: 205px; width: 205px">

                                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                                  <small id="fileHelp" class="form-text text-muted">MAX 2MB.</small>
                                    </center>
                                </div>
                                <center><input type="submit" value="Update" class="btn btn-primary"></input></center>
                            </form>
                        </div>
           
                </div>


            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
</div>

@endsection