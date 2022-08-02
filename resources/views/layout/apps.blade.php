<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="semi-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $section }} - SARIFNA GENRE</title>
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" /> -->
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="{{ asset('assets/css/semi-dark.css') }}" rel="stylesheet" />
    <!-- loader-->
    {{-- <link href="{{ asset('assets/css/pace.min.csss') }}" rel="stylesheet" /> --}}
    <link rel="icon" href="Salam-genre-logo-removebg-preview.png" type="image/png" />
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        @include('layout.vHeader')
        <!--end top header-->
        <!--start sidebar -->
        @include('layout.vSidebar')
        <!--end sidebar -->

        @yield('content')
        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->
    <!-- Bootstrap bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);
    </script>
</body>

</html>
