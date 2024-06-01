<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{app()->getLocale() == "ar" ? "rtl" : 'ltr'}}">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Valex - Larvel Admin Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template">

        <!-- FAVICON -->
		<link rel="icon" href="{{asset('build/assets/img/brand/favicon.png')}}" type="image/x-icon">

		<!-- TITLE -->
		<title> Valex - Laravel Bootstrap5 Premium Dashboard Template</title>

        <!-- BOOTSTRAP CSS -->
	    <link id="style" href="{{asset('build/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        <!-- ANIMATE CSS -->
        <link href="{{asset('build/assets/iconfonts/animate.css')}}" rel="stylesheet">

        <!-- APP SCSS & APP CSS -->
        @vite(['resources/sass/app.scss' , 'resources/css/app.css'])

        @yield('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            @media (min-width: 576px) {
                .main-header .countries .dropdown-menu::before {
                    content: "";
                    width: 14px;
                    height: 14px;
                    background: white;
                    position: absolute;
                    top: -7px;
                    inset-inline-end: 117px;
                    transform: rotate(45deg);
                    border-block-start: 1px solid #eae8f1;
                    border-inline-start: 1px solid #eae8f1;
                }
            }
        </style>
        @livewireStyles
	</head>

	<body class="ltr main-body app sidebar-mini">
    @include('Dashboard.layouts.components.switcher')
		<!--- GLOBAL LOADER -->
		<div id="global-loader" >
			<img src="{{asset('build/assets/img/svgicons/loader.svg')}}" class="loader-img" alt="loader">
		</div>
		<!--- END GLOBAL LOADER -->

        <!-- PAGE -->
		<div class="page">
            <div>
                <!-- MAIN-HEADER -->
                @include('Dashboard.layouts.components.main-header1')
                <!-- END MAIN-HEADER -->

                <!-- MAIN-SIDEBAR -->
                @include('Dashboard.layouts.components.main-sidebar')
                <!-- END MAIN-SIDEBAR -->

            </div>

            <!-- MAIN-CONTENT -->
            <div class="main-content app-content">
                <div class="main-container container-fluid">
                        @yield('content')
                </div>
            </div>
            <!-- END MAIN-CONTENT -->

            <!-- RIGHT-SIDEBAR -->
            @include('Dashboard.layouts.components.right-sidebar')
           <!-- END RIGHT-SIDEBAR -->

           <!-- MESSAGE-MODAL -->
           @include('Dashboard.layouts.components.message-modal')
            <!-- END MESSAGE-MODAL -->

            <!-- VIDEO-MODAL -->
            @include('Dashboard.layouts.components.video-modal')
            <!-- END VIDEO-MODAL -->

            <!-- AUDIO-MODAL -->
            @include('Dashboard.layouts.components.audio-modal')
            <!-- END AUDIO-MODAL -->

            @yield('modals')

            <!-- MAIN-FOOTER -->
            @include('Dashboard.layouts.components.main-footer')
            <!-- END MAIN-FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('Dashboard.layouts.components.scripts')

        <!-- STICKY JS -->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- THEMECOLOR JS -->
        @vite('resources/assets/js/themecolor.js')

    @vite('resources/assets/switcher/js/switcher.js')
        <!-- APP JS -->
  <script src="{{asset('js/app.js')}}"></script>


        <!-- END SCRIPTS -->
    @livewireScripts
	</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        @if(Session::has('message'))
        var type = "{{Session::get('alert-type','info')}}"
        toastr.options = {
            'progressBar': true,
            'closeButton': true,
        };
        switch(type){
            case 'info':
                toastr.info("{{Session::get('message')}}",'Success!',{timeOut:16000});
                break;
            case 'success':
                toastr.success("{{Session::get('message')}}");
                break;
            case 'warning':
                toastr.warning("{{Session::get('message')}}");
                break;
            case 'error':
                toastr.error("{{Session::get('message')}}");
                break;
        }
        @endif
    </script>



</html>
