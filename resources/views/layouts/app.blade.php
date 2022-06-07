<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Welcome To SUE')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    
    <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/core/main.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/daygrid/main.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/timegrid/main.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/list/main.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/backend.css?v=1.0.0') }}" rel="stylesheet" type="text/css">

    <!-- icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">

    <!-- Add Custom CSS -->
    @stack('include-css')
</head>
<body>
       
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Page Header Start-->
        @yield('header')
        <!-- Page Header Start-->

        <!-- Page Sidebar Start-->
        @yield('sidebar')
        <!-- Page Sidebar Ends-->

        <!-- Page Content Start-->
        <div class="content-page">
            @yield('content')
        </div>
        <!-- Page Content Start-->

   
    <!-- Page footer Start-->
    @yield('footer')
    <!-- Page footer Ends-->

    
    </div>
    <!-- Wrapper End-->

    <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/customizer.js') }}"></script>

    <script src="{{ asset('assets/js/sidebar.js') }}"></script>

    <!-- Flextree Javascript-->
    <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>

    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('assets/js/vector-map-custom.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('assets/js/charts/01.js') }}"></script>
    <script src="{{ asset('assets/js/charts/02.js') }}"></script>

    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>

    <!-- Emoji picker -->
    <script src="{{ asset('assets/vendor/emoji-picker-element/index.js') }}" type="module"></script>
    <script src="{{ asset('assets/js/form-wizard/form-wizard-three.js') }}"></script>
    <script src="{{ asset('assets/vendor/fullcalendar/core/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/fullcalendar/daygrid/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/fullcalendar/timegrid/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/fullcalendar/list/main.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- menu JavaScript -->
    <script src="{{ asset('assets/js/menu-dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/fullscreen.js') }}"></script>

    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

    <!-- Form Validator Js  -->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>

    @if(Session::has('success'))
        toastr["success"]('{{ Session::get('success') }}');
    @endif
        
    @if(Session::has('error'))
        toastr["error"]('{{ Session::get('error') }}');
    @endif
        
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr["error"]('{{ $error }}');
        @endforeach
    @endif
        
    </script>
    <!-- Add Custom JS -->
    @stack('include-js')

</body>
</html>
