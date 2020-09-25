@extends('layouts.users.master')


@section('content')

<div class="main-content">
    <div class="row">
        <div class="col-12">
     
              
                            <!-- Page Widget -->
                            <div class="card text-center">
                                <div class="card-body">
                                    <a href="javascript:void(0)">
                                        <img class="border-radius-50 profile-img" src="{{ asset('asset_user')}}/{{ Auth()->user()->avatar }}" alt="_NULL">
                                    </a>
                                    <h4 class="font-22 mt-20 mb-1">{{ Auth()->user()->name }}</h4>
                                    <h6 class="profile-job font-14">{{ Auth()->user()->email }}</h6>
                                    <p>Hi! I'm Gelo Saraf Gaada Ahlaq</p>
                                    <div class="profile-social mt-20 mb-20">
                                        <a class="fa fa-twitter" href="javascript:void(0)"></a>
                                        <a class="fa fa-facebook" href="javascript:void(0)"></a>
                                        <a class="fa fa-dribbble" href="javascript:void(0)"></a>
                                        <a class="fa fa-github" href="javascript:void(0)"></a>
                                    </div>
                                    <button type="button" class="btn btn-primary waves-effect waves-light waves-round">Follow</button>
                                </div>
                                <div class="card-footer pt-3 px-3 pb-0">
                                    <div class="row no-space">
                                        <div class="col-sm-4 col-lg-12 col-xl-4 mb-3">
                                            <strong class="profile-stat-count d-block font-18 text-primary">360</strong>
                                            <span class="font-14">Follower</span>
                                        </div>
                                        <div class="col-sm-4 col-lg-12 col-xl-4 mb-3">
                                            <strong class="profile-stat-count d-block font-18 text-primary">1280</strong>
                                            <span class="font-14">Facebook</span>
                                        </div>
                                        <div class="col-sm-4 col-lg-12 col-xl-4 mb-3">
                                            <strong class="profile-stat-count d-block font-18 text-primary">3000</strong>
                                            <span class="font-14">Tweets</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- End Page Widget -->
               

        </div>
    </div>
</div>






@endsection