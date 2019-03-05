<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('sufee/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee/vendors/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee/assets/css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                Laravel <b>Training</b>
            </a>
            <a class="navbar-brand hidden" href="{{ url('/') }}">
                L<b>T</b>
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            @include('layouts._sidebar')
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
<!-- Left Panel -->

<!-- Right Panel -->
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">
        @include('layouts._header')
    </header>
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>@yield('title')</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <!-- List form error msg -->
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div> <!-- .content -->
</div><!-- /#right-panel -->
<!-- Right Panel -->

<script src="{{ asset('sufee/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('sufee/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('sufee/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('sufee/assets/js/main.js') }}"></script>

<script src="{{ asset('sufee/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('sufee/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('sufee/assets/js/widgets.js') }}"></script>
<script src="{{ asset('sufee/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('sufee/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('sufee/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>

</body>
</html>
