<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPU - @yield('title')</title>
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('assetLogin/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" type="text/css">
    <!-- Library Sweetalert
        ============================================ -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('styles')
</head>
<body>
    @yield('content')
    @include('sweet::alert')

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('myjs/ajaxSearch.js') }}" type="text/javascript"></script>
</body>
</html>
