<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('MDB/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('MDB/css/mdb.min.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>



<script src="{{asset('MDB/js/bootstrap.min.js')}}"></script>
<script src="{{asset('MDB/js/jquery-3.2.1.min.js')}}"></script>
</body>
</html>