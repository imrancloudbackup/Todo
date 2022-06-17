<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="javascript:void(0);" class="logo logo-large"><img src="{{asset('backend/assets/images/todologo.png')}}" class="img-fluid" alt="logo" style="width:50px;height:50px;"></a>
            <a href="javascript:void(0);" class="logo logo-small"><img src="{{asset('backend/assets/images/todologo.png')}}" class="img-fluid" alt="logo" style="width:50px;height:50px;"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="{{route('createtodolist')}}">
                      <img src="{{asset('backend/assets/images/svg-icon/user.svg')}}" class="img-fluid" alt="Todo List"><span>Todo List</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                </li>
               
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>