<!DOCTYPE html>
{{-- MERUPAKAN HALAMAN LAYPUT YANG DIGUNAKAN DI SELURUH PAGE --}}
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Muria Batik' }} | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    {{-- VITE TAILWIND --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="hold-transition sidebar-mini">
    {{-- SWEET ALERT --}}
    @include('sweetalert::alert')
    <div class="wrapper">
        {{-- NAV HEADER --}}
        @include('layouts.header') {{-- HEMANGGIL HEADER --}}
        {{-- NAV SIDEBAR --}}
        @include('layouts.sidebar'){{-- MEMANGGIL SIDEBAR --}}
        {{-- HEADER KONTEN --}}

        {{-- ISI KONTEN --}}
        {{-- LOKASI PENEMPATAN TEMPLATE --}}
        <div class="content-wrapper">
            <div class="container mt-5 px-sm-3 px-lg-5">
                <h2 class="font-weight-bold h3 text-dark">
                    @yield('header') {{-- LOKASI TEMPLATE HEADER --}}
                </h2>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @yield('content'){{-- LOKASI TEMPLATE CONTENT --}}
            </div>
        </div>
</body>

@include('layouts.footer') {{-- MEMANGGIL FOOTER --}}

</html>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
