  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('dashboard')}}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        <a class="nav-item nav-link" href="">TAU AH</a>
        <a class="nav-item nav-link" href="">Voucher</a>
        <a class="nav-item nav-link" href="">Keranjang</kbd></a>
        <a class="nav-item nav-link" href="{{ url('report/'.Auth()->user()->id) }}">Report</a>


      </div>
    </div>

<div class="nav-item dropdown">
    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="rounded-circle mr-2" src="{{ asset('asset_user')}}/{{ Auth()->user()->avatar }}" style='width:30px;' alt="nOt Found"></button>
    <div class="dropdown-menu dropdown-menu-right">
        <!-- User Profile Area -->
        <div class="user-profile-area">
            <a href="{{ url('profile') }}" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> My profile</a>
            <a href="{{ url('setting-users') }}" class="dropdown-item"><i class="ti-settings text-default" aria-hidden="true"></i> Account settings</a>
            <a href="{{ url('logout') }}" class="dropdown-item"><i class="ti-unlink text-warning" aria-hidden="true"></i> Sign-out</a>
        </div>
    </div>
</div>
  </nav>
