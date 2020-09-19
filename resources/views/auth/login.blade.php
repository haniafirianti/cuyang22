<html lang="en"><!-- Mirrored from demo.riktheme.com/undex-1/side-menu-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2019 08:41:47 GMT --><head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Cuyang - Login</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.png') }}">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <style type="text/css">
        .preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background-color: #fff;
        }
        .preloader .loading {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          font: 14px arial;
        }
        </style></head>

<body class="dark-color-overlay bg-img" style="background-image: url(img/bg-img/8.jpg);">

    <!-- Preloader -->
    
    <div class="preloader">
      <div class="loading">
        <img src="{{ asset('image/love.gif')}}" width="200">
        <p>Harap Tunggu</p>
      </div>
    </div>

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-sm-10 col-lg-8">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="xs-d-none">
                                            <img src="{{ url('img/bg-img/6.png')}}" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <!-- Logo -->
                                        <div class="card-body-login mb-30">
                                            <img src="img/core-img/logo.png" alt="">
                                        </div>

                                        <h4 class="font-22 mb-30">Sign In</h4>

                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="float-left" for="emailaddress">Email</label>
                                                <input class="form-control" name="email" type="email" id="emailaddress"  placeholder="Masukan Email Anda">
                                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                 @error('email')
                                                    <p>
                                                        Email dan Password Tidak Sesuai
                                                    </p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                
                                                <label class="float-left" for="password">Password</label>
                                                <input class="form-control" name="password" type="password" id="password" placeholder="Masukan Password Anda">
                                               <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                              

                                               <!--  <a href="forget-password.html" class="text-dark float-right"><span class="font-12 text-primary">Lupa password?</span></a> -->
                                            </div>

                                            <div>
                                                <label>Belum Punya Akun?</label><a href="{{  route('register') }}"> Register</a>
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="custom-control custom-checkbox pl-0">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"><span class="font-16">Remember me</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                            </div>

                                        </form>
                                    </div> <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>

    <!-- Active JS -->
    <script src="js/default-assets/active.js"></script>

    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <script>
        $(document).ready(function(){
          $(".preloader").fadeOut();
        })
    </script>


<!-- Mirrored from demo.riktheme.com/undex-1/side-menu-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2019 08:41:49 GMT -->
</body></html>
