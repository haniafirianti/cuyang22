<?php
$users = \App\User::where('id', \Auth::user()->id)->first();
?>

<div class="choose-layout-area">
    <div class="setting-trigger-icon" id="settingTrigger">
        <i class="ti-settings"></i>
    </div>
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
        <div class="choose-layout" id="chooseLayout" style="overflow: hidden; width: auto; height: 100%;">
            <h6 class="mb-30">Choose A Layout</h6>
            <div class="demos-content">
                <div class="single-demos">
                    <a href="index.html"><img src="{{ url('img/demo/1.png')}}" alt=""></a>
                    <span>Vertical Dark</span>
                </div>
                <div class="single-demos">
                    <a href="http://demo.riktheme.com/undex-1/side-menu/index.html"><img src="{{ url('img/demo/2.png')}}" alt=""></a>
                    <span>Vertical Light</span>
                </div>
                <div class="single-demos">
                    <a href="http://demo.riktheme.com/undex-1/side-menu-gradient/index.html"><img src="{{ url('img/demo/3.png')}}" alt=""></a>
                    <span>Sidebar Gradient</span>
                </div>
            </div>
        </div>
        <div class="slimScrollBar" style="background: rgb(140, 140, 140); width: 2px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 0px; height: 692.198px;"></div>
        <div class="slimScrollRail" style="width: 2px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div>
    </div>
</div>

<!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="index.html"><img class="desktop-logo" src="{{ url('img/core-img/logo.png')}}" alt="Desktop Logo"> <img class="small-logo" src="{{ url('img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
        </div>

        <!-- Side Nav -->
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
            <div class="ecaps-sidenav" id="ecapsSideNav" style="overflow: hidden; width: auto; height: 100%;">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu tree" data-widget="tree">
                            <li class="sidemenu-user-profile d-flex align-items-center">
                                <div class="user-thumbnail">
                                    <img src="{{ asset('asset_user/' . Auth::user()->avatar) }}" alt="eRROR">
                                </div>
                                <div class="user-content">
                                    <h6>{{ \Auth::user()->name }}</h6>
                                    <span>{{ \Auth::user()->email }}</span>
                                </div>
                            </li>
                            <li><a href="{{ url('home')}}"><i class="icon_lifesaver"></i> <span>Dashboard</span></a></li>
                            <li><a href="{{ url('home/about')}}"><i class="icon-ribbon"></i> <span>About</span></a></li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="icon_laptop"></i> <span>Progress</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('perpustakaan')}}">- Progress 1</a></li>
                                    <li><a href="">- Progress 2</a></li>
                                    <li><a href="">- Progress 3</a></li>
                                    <li><a href="">- Project Details</a></li>
                                </ul>
                            </li>
                            <li><a href=""><i class="fa fa-phone"></i> <span>Contact</span></a></li>

                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="icon_cog"></i> </i> <span>Setting</span></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('change-password') }}">Profile</a></li>

                                </ul>
                            </li>
                            <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="slimScrollBar" style="background: rgb(156, 156, 156); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 0px; height: 399.151px;"></div>
            <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div>
        </div>
    </div>