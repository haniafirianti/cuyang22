<!DOCTYPE html>
<html>
<head>
  <title></title>
  @include('layouts.head')
</head>
<body>

  @include('layouts.sidebar')


<div class="ecaps-page-content">
    <div class="container-fluid">
        @yield('content')
       @include('layouts.header')

        <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Area -->
                            <footer class="footer-area">
                                <!-- Copywrite Text -->
                                <div class="copywrite-text text-center">
                                    <p>Undex © 2019 created by <a href="#">Theme-zome</a></p>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>

    </div>
    
  @include('layouts.script')

</body>
</html>