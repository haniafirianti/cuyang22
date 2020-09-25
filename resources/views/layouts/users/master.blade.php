@include('layouts.users.head')

<div class="preloader">
    <div class="loading">
      <img src="{{ asset('image/love.gif')}}" width="200">
      <p>Harap Tunggu</p>
    </div>
  </div>

  @include('layouts.users.navbar')

  	@yield('content')

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

  	  @include('sweetalert::alert')
	@include('layouts.users.script')