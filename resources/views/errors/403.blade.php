<html lang="en"><!-- Mirrored from demo.riktheme.com/undex-1/side-menu-dark/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2019 08:41:50 GMT --><head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Cuyang - 403 Error Dont Access!</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.png')}}">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">

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
    </style>
</head>

<body>
    <!-- Preloader -->

    <div class="preloader">
      <div class="loading">
        <img src="{{ asset('image/love.gif')}}" width="200">
        <p>Harap Tunggu</p>
      </div>
    </div>
    <!-- Error Page Area -->
    <div class="error-page-area">
        <!-- Error Content -->
        <div class="error-content text-center py-5 px-4">
            <!-- Error Thumb -->
            <div class="error-thumb">
            	<h1>403 - ERROR YOU DON'T HAVE ACCESS </h1>
               <!--  <img src="{{ asset('img/403.jpg')}}" alt=""> -->
            </div>
            <h2>Opps! Anda Tidak Memuliki Akses Bambank !!!</h2>
            <p>Silahkan Kembali Ke halaman Dashboar ! atau baku Hamtam bareng Gue !</p>
            <a class="btn btn-rounded btn-primary mt-30" href="{{ url('dashboard') }}">Back To Dashboard</a>
        </div>
    </div>

    <!-- Must needed plugins to the run this template -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>

    <!-- Active JS -->
    <script src="{{ asset('js/default-assets/active.js') }}"></script>

        <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <script>
        $(document).ready(function(){
          $(".preloader").fadeOut();
        })
    </script>
    
</body>

</html>