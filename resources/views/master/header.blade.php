<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Todolist">
    <meta name="keywords" content="Todolist">
    <meta name="author" content="Todolist">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon/favicon.ico')}}">
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('backend/assets/images/favicon/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('backend/assets/images/favicon/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('backend/assets/images/favicon/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/assets/images/favicon/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('backend/assets/images/favicon/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('backend/assets/images/favicon/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('backend/assets/images/favicon/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('backend/assets/images/favicon/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/assets/images/favicon/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('backend/assets/images/favicon/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/assets/images/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('backend/assets/images/favicon/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="{{ asset('backend/assets/images/favicon/manifest.json')}}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('backend/assets/images/favicon/ms-icon-144x144.png')}}">
	<meta name="theme-color" content="#ffffff">
    <title>Todo List</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{ asset('backend/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!-- Apex css -->
    <link href="{{ asset('backend/assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet">
    <!-- Slick css -->
    <link href="{{ asset('backend/assets/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/plugins/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css">
     <!-- DataTables css -->
     <link href="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
     <!-- Responsive Datatable css -->
     <link href="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('backend/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('backend/assets/css/pikaday.css') }}" rel="stylesheet" />
     <link href="{{ asset('backend/assets/css/jquery.toast.css') }}" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
     <style>
#loader
{
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	width: 100%;
	background: rgba(0, 0, 0, 0.75) url("{{ asset('backend/assets/images/loading.gif') }}") no-repeat center center;
	z-index: 10000;
}

</style>

</head>

<body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img
                    src="{{ asset('backend/assets/images/svg-icon/close.svg') }}"
                    class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Payment Reminders</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Stock Updates</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Open for New Products</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Enable SMS</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Newsletter Subscription</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Show Map</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">e-Statement</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h6 class="mb-0">Monthly Report</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
       @include('master.sidebar')
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile and PC -->

           @include("master.topbar")

            <!-- End Topbar -->

            <!-- Start Contentbar -->

            @yield('content')

            <!-- End Contentbar -->

            <!-- Start Footerbar -->
            @include("master.footer")
            <!-- End Footerbar -->


        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <div id="loader"></div>
    <!-- Start js -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/detect.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vertical-menu.js') }}"></script>
    <!-- Switchery js -->
    <script src="{{ asset('backend/assets/plugins/switchery/switchery.min.js') }}"></script>
    <!-- Apex js -->
    <script src="{{ asset('backend/assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('backend/assets/plugins/slick/slick.min.js') }}"></script>
    <!-- To Do List js -->
    <script src="{{ asset('backend/assets/js/custom/custom-to-do-list.js') }}"></script>
    <!-- Custom Widget js -->
    <script src="{{ asset('backend/assets/js/custom/custom-widgets.js') }}"></script>
    <!-- Custom Dashboard js -->
    <script src="{{ asset('backend/assets/js/custom/custom-dashboard.js') }}"></script>

     <!-- Datatable js -->
     <script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/jszip.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/pdfmake.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/vfs_fonts.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/buttons.print.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
     <script src="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('backend/assets/js/custom/custom-table-datatable.js') }}"></script>
     <script src="{{ asset('backend/assets/js/moment.min.js') }}"></script>
     <script src="{{ asset('backend/assets/js/pikaday.js') }}"></script>
     <!-- Toasts js -->
     <script src="{{ asset('backend/assets/js/jquery.toast.js') }}"></script>
     <!-- Core js -->
     <script src="{{ asset('backend/assets/js/core.js') }}"></script>

    <!-- End js -->

    <script>
    var spinner = $('#loader'); 
    $("#todolistform").on("submit", function(){
        spinner.show();
    });
    $("#editmodalform").on("submit", function(){
        spinner.show();
    });

    var msg = '{{Session::get('message.level')}}';
    var msgcontent = '{{Session::get('message.content')}}';
    if(msg == "" || msg == null)
    {
        spinner.hide();
    }
    else
    {
        if(msg == "success")
        {
            spinner.hide();
            $.toast({
                heading: 'Success',
                text: msgcontent,
                showHideTransition: 'slide',
                icon: 'success',
                position: 'top-right',
                stack: false
            });
        }
        else
        {
            spinner.hide();
            $.toast({
                heading: 'Error',
                text: msgcontent,
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
                stack: false
            });
        }
    }
    </script>

<script type="text/javascript">
            $.ajaxSetup({
              headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
              }
            })

            function ViewTasks(id)
            {
               $.ajax({
                 type:'GET',
                 url:'/task/edit/'+id,
                 dataType:'json',
                 success:function(data)
                 {
                    console.log(data);
                    $.each(data, function (key, value) {
                      $('#todolisttableid').val(value.id);
                      $('#edittodolist').val(value.task_name);
                    });

                 }
               })
            }
         </script>

</body>

</html>
