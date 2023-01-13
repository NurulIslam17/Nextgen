<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('/')}}beckend/assets/images/logo.svg" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('/')}}beckend/assets/images/logo-dark.png" alt="" height="17">
                                </span>
                </a>

                <a href="{{ route('dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('/')}}beckend/assets/images/logo-light.svg" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <span style="font-weight: bolder; font-size: 25px;color: #b60000">Next</span><span style="font-weight: bolder; font-size: 25px;color: #ffffff">Blog</span>
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>


        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('/')}}beckend/assets/images/users/human.png"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ml-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>

                <button type="button" class="btn header-item waves-effect">
                    
                    <a href="{{ url('/chatify')}}" target="new">
                        <i style="font-size: 25px;color:blue"  class="mdi mdi-send d-none d-xl-inline-block"></i>
                    </a>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" onclick="alert('Still working in it !')" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                    <a class="dropdown-item d-block" onclick="alert('Still working in it !')" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" onClick="event.preventDefault();document.getElementById('logout').submit();"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>

                    <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                    </form>

                </div>
            </div>

        </div>
    </div>
</header>
