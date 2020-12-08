<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Seo Meta -->
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">
    <title>Listen App - Online Music Streaming App</title>

    <!-- Favicon -->
    <link href="{{ url('assetss/images/logos/favicon.png') }}" rel="icon"/>

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="{{ url('assetss/images/logos/touch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('assetss/images/logos/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assetss/images/logos/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ url('assetss/images/logos/touch-icon-ipad-retina.png') }}">

    <!-- Styles -->
    <link href="{{ url('assetss/css/vendors.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assetss/css/styles.bundle.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            {{-- Modal Login --}}
            @if (isset($errors) and $errors->any())
                @if ($errors->any() and old('quickLoginForm')=='1')
                    $('#quickLogin').modal();
                @endif
            @endif
        });
    </script>

    @yield('after_scripts')
</head>
<body>
    <!-- Begin | Loading [[ Find at scss/framework/base/loader/loader.scss ]] -->
    <div id="loading">
        <div class="loader">
            <div class="eq">
                <span class="eq-bar eq-bar--1"></span>
                <span class="eq-bar eq-bar--2"></span>
                <span class="eq-bar eq-bar--3"></span>
                <span class="eq-bar eq-bar--4"></span>
                <span class="eq-bar eq-bar--5"></span>
                <span class="eq-bar eq-bar--6"></span>
            </div>
            <span class="text">Loading</span>
        </div>
    </div>
    <!-- End | Loading -->
    
    @yield('content')

    <!-- Back Drop -->
    <div class="backdrop header-backdrop"></div>
    <div class="backdrop sidebar-backdrop"></div>

    <!-- Scripts -->
    <script src="{{ url('assetss/js/vendors.bundle.js') }}"></script>
    <script src="{{ url('assetss/js/scripts.bundle.js') }}"></script>
</body>
</html>