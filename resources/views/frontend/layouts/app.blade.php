<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('frontend/assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
    @yield('css')
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
</head>

<body>


    <!-- Header -->
    @include('frontend.layouts.partial.navbar')
    <!-- Close Header -->

    @yield('content')

    <!-- Start Footer -->
    @include('frontend.layouts.partial.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{asset('frontend/assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/templatemo.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <!-- End Script -->
</body>

</html>
