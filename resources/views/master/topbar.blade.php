
<div class="topbar-mobile">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="mobile-logobar">
                <a href="javascript:void(0);" class="mobile-logo"><img
                        src="{{ asset('backend/assets/images/todologo.png') }}" class="img-fluid"
                        alt="logo" style="width:20px !important;height:20px !important;"></a>
            </div>
            <div class="mobile-togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="topbar-toggle-icon">
                            <a class="topbar-toggle-hamburger" href="javascript:void();">
                                <img src="{{ asset('backend/assets/images/svg-icon/horizontal.svg') }}"
                                    class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                <img src="{{ asset('backend/assets/images/svg-icon/verticle.svg') }}"
                                    class="img-fluid menu-hamburger-vertical" alt="verticle">
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger" href="javascript:void();">
                                <img src="{{ asset('backend/assets/images/svg-icon/collapse.svg') }}"
                                    class="img-fluid menu-hamburger-collapse" alt="collapse">
                                <img src="{{ asset('backend/assets/images/svg-icon/close.svg') }}"
                                    class="img-fluid menu-hamburger-close" alt="close">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="topbar">
    <!-- Start row -->
    <div class="row align-items-center">
        <!-- Start col -->
        <div class="col-md-12 align-self-center">
            <div class="togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger" href="javascript:void();">
                                <img src="{{ asset('backend/assets/images/svg-icon/collapse.svg') }}"
                                    class="img-fluid menu-hamburger-collapse" alt="collapse">
                                <img src="{{ asset('backend/assets/images/svg-icon/close.svg') }}"
                                    class="img-fluid menu-hamburger-close" alt="close">
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="searchbar">

                        </div>
                    </li>
                </ul>
            </div>
            <div class="infobar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item" style="margin-top:5px !important;">
                        <div class="profilebar">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="{{ asset('backend/assets/images/users/profile.svg') }}"
                                        class="img-fluid" alt="profile"><span
                                        class="feather icon-chevron-down live-icon"></span></a>
                                <div class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="profilelink">
                                    <div class="dropdown-item">
                                        <div class="profilename">
                                            @if(empty(Auth::user()->name))<h5>User</h5>@else<h5>{{Auth::user()->name}}</h5>@endif
                                        </div>
                                    </div>
                                    <div class="userbox">
                                        <ul class="list-unstyled mb-0">
                                            <li class="media dropdown-item">
                                                <a href="{{route('user.logout')}}"
                                                    class="profile-icon"><img
                                                        src="{{ asset('backend/assets/images/svg-icon/logout.svg') }}"
                                                        class="img-fluid" alt="logout">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>