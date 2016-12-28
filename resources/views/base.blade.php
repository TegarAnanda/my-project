<!DOCTYPE html>
<html>
<head>
    <title>My Project</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">

</head>
<body>

    <header id="header">
        @section('header')
            @include('layout.nav-header')
        @show
    </header>

    <section id="content">
        <div class="container">
            @yield('content')
        </div>
    </section>

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</body>
</html>