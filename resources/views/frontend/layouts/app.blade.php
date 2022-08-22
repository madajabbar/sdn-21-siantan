<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDN 21 SIANTAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('img/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.ico')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
    @yield('css')
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>

    @include('sweetalert::alert')

    <!-- Header -->
    @include('frontend.layouts.partial.navbar')
    <!-- Close Header -->
    @yield('content')

    <!-- Start Footer -->
    @include('frontend.layouts.partial.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    @yield('js')
    {{-- <script src="{{asset('frontend/assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-migrate-1.2.1.min.js')}}"></script> --}}
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/templatemo.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <!-- End Script -->
</body>

</html>
