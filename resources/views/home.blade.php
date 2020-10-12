@extends('layouts.master')

@section('content')

<div class="main-content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">

          <center>
            <h4 class="card-title">We Are RPL 1</h4>
          </center>
          <div class="embed-responsive embed-responsive-16by9 height-500">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tlZLZZMJRoA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

        </div>
      </div>
    </div>


    <div class="container-fluid">
      <div class="mb-30">
        <center>
          <button class="btn btn-facebook waves-effect btn-circle waves-light mb-2" type="button"> <i class="fa fa-facebook"></i> </button>
          <button class="btn btn-twitter waves-effect btn-circle waves-light mb-2" type="button"> <i class="fa fa-twitter"></i> </button>
          <button class="btn btn-googleplus waves-effect btn-circle waves-light mb-2" type="button"> <i class="fa fa-google-plus"></i> </button>
          <button class="btn btn-linkedin waves-effect btn-circle waves-light mb-2" type="button"> <i class="fa fa-linkedin"></i> </button>
          <button class="btn btn-instagram waves-effect btn-circle waves-light mb-2" type="button"> <i class="fa fa-instagram"></i> </button>
          <button class="btn btn-pinterest waves-effect btn-circle waves-light mb-2" type="button"> <i class="fa fa-pinterest"></i> </button>
          <button class="btn btn-dribbble waves-effect btn-circle waves-light mb-2" type="button"> <i class="fa fa-dribbble"></i> </button>
          <button class="btn btn-youtube waves-effect btn-circle waves-light mb-2" type="button"> <i class="fa fa-youtube"></i> </button>
        </center>
        <div class="card-body">
          <div class="py-4">
            <h6 class="mb-15">Cari Profil Github Anda Disisni !</h6>
            <button type="button" class="btn btn-info btn-xs" id="ajax-alert"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>



@endsection