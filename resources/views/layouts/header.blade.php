<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Spyder') }}</title>

    <link rel="apple-touch-icon" href={{asset("assets/images/apple-touch-icon.png")}}>
    <link rel="shortcut icon" href={{asset("assets/images/favicon.ico")}}>

    <!-- Stylesheets -->
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/bootstrap-extend.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/site.min.css")}}>

    <!-- Plugins -->
    <link rel="stylesheet" href={{asset("assets/vendor/animsition/animsition.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/asscrollable/asScrollable.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/switchery/switchery.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/intro-js/introjs.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/slidepanel/slidePanel.css")}}>
{{--    <link rel="stylesheet" href={{assets("assets/vendor/flag-icon-css/flag-icon.css")}}>--}}
    <link rel="stylesheet" href={{asset("assets/vendor/waves/waves.css")}}>
{{--    <link rel="stylesheet" href={{assets("assets/vendor/chartist/chartist.css")}}>--}}
    <link rel="stylesheet" href={{asset("assets/vendor/jvectormap/jquery-jvectormap.css")}}>
{{--    <link rel="stylesheet" href={{assets("assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css")}}>--}}
    <link rel="stylesheet" href={{asset("assets/examples/css/dashboard/v1.css")}}>

    <link rel="stylesheet" href={{asset("assets/vendor/datatables.net-bs4/dataTables.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css")}}>
    <link rel="stylesheet" href={{asset("assets/examples/css/tables/datatable.css")}}>



    <!-- Fonts -->
    <link rel="stylesheet" href={{asset("fonts/font-awesome/font-awesome.css")}}>
    <link rel="stylesheet" href={{asset("fonts/material-design/material-design.min.css")}}>
    <link rel="stylesheet" href={{asset("fonts/brand-icons/brand-icons.min.css")}}>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <!--<script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>-->
    <![endif]-->

    <!--[if lt IE 10]>
    <!--<script src="../../global/vendor/media-match/media.match.min.js"></script>-->
    <!--<script src="../../global/vendor/respond/respond.min.js"></script>-->
    <![endif]-->

    @yield('css')

    <!-- Scripts -->
    <script src={{asset("assets/vendor/breakpoints/breakpoints.js")}}></script>
    <script>
        Breakpoints();
    </script>
</head>
<body  class="animsition dashboard" style="margin-top: 90px">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<nav class="site-navbar navbar navbar-default navbar-inverse navbar-fixed-top navbar-mega"
     role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon md-more" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src={{asset("assets/images/logo.png")}}>
            <a style="color:white"  href="{{ url('/') }}"><span class="navbar-brand-text hidden-xs-down"> {{ config('app.name', 'Spyder') }}</span></a>
        </div>
        {{--<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"--}}
                {{--data-toggle="collapse">--}}
            {{--<span class="sr-only">Toggle Search</span>--}}
            {{--<i class="icon md-search" aria-hidden="true"></i>--}}
        {{--</button>--}}
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            {{--<ul class="nav navbar-toolbar">--}}
                {{--<li class="nav-item hidden-float" id="toggleMenubar">--}}
                    {{--<a class="nav-link" data-toggle="menubar" href="#" role="button">--}}
                        {{--<i class="icon hamburger hamburger-arrow-left">--}}
                            {{--<span class="sr-only">Toggle menubar</span>--}}
                            {{--<span class="hamburger-bar"></span>--}}
                        {{--</i>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                {{--@guest--}}
                    {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                    {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                {{--@else--}}
                    {{--<li><a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();"><b>{{ __('Logout') }}</b></a></li>--}}
                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--@csrf--}}
                    {{--</form>--}}
                {{--@endguest--}}
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    </div>
</nav>

<div class="page">
    {{--<main class="py-4">--}}
        @yield('content')
    {{--</main>--}}

</div>

<footer>

</footer>

<!-- Core  -->
<script src={{asset("assets/vendor/babel-external-helpers/babel-external-helpers.js")}}></script>
<script src={{asset("assets/vendor/jquery/jquery.js")}}></script>
<script src={{asset("assets/vendor/popper-js/umd/popper.min.js")}}></script>
<script src={{asset("assets/vendor/bootstrap/bootstrap.js")}}></script>
<script src={{asset("assets/vendor/animsition/animsition.js")}}></script>
<script src={{asset("assets/vendor/mousewheel/jquery.mousewheel.js")}}></script>
<script src={{asset("assets/vendor/asscrollbar/jquery-asScrollbar.js")}}></script>
<script src={{asset("assets/vendor/asscrollable/jquery-asScrollable.js")}}></script>
<script src={{asset("assets/vendor/ashoverscroll/jquery-asHoverScroll.js")}}></script>
<script src={{asset("assets/vendor/waves/waves.js")}}></script>

<!-- Plugins -->
<script src={{asset("assets/vendor/switchery/switchery.js")}}></script>
<script src={{asset("assets/vendor/intro-js/intro.js")}}></script>
<script src={{asset("assets/vendor/screenfull/screenfull.js")}}></script>
<script src={{asset("assets/vendor/slidepanel/jquery-slidePanel.js")}}></script>
{{--<script src={{assets("assets/vendor/chartist/chartist.min.js")}}></script>--}}
{{--<script src={{assets("assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js")}}></script>--}}
<script src={{asset("assets/vendor/jvectormap/jquery-jvectormap.min.js")}}></script>
<script src={{asset("assets/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js")}}></script>
<script src={{asset("assets/vendor/matchheight/jquery.matchHeight-min.js")}}></script>
<script src={{asset("assets/vendor/peity/jquery.peity.min.js")}}></script>

<script src={{asset("assets/vendor/datatables.net/jquery.dataTables.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-bs4/dataTables.bootstrap4.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-rowgroup/dataTables.rowGroup.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-scroller/dataTables.scroller.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-responsive/dataTables.responsive.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-buttons/dataTables.buttons.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-buttons/buttons.html5.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-buttons/buttons.flash.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-buttons/buttons.print.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-buttons/buttons.colVis.js")}}></script>
<script src={{asset("assets/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js")}}></script>


<!-- Scripts -->
<script src={{asset("js/Component.js")}}></script>
<script src={{asset("js/Plugin.js")}}></script>
<script src={{asset("js/Base.js")}}></script>
<script src={{asset("js/Config.js")}}></script>

<script src={{asset("assets/js/Section/Menubar.js")}}></script>
<script src={{asset("assets/js/Section/Sidebar.js")}}></script>
<script src={{asset("assets/js/Section/PageAside.js")}}></script>
<script src={{asset("assets/js/Plugin/menu.js")}}></script>

<!-- Config -->
<script src={{asset("js/config/colors.js")}}></script>
<script src={{asset("assets/js/config/tour.js")}}></script>
<script>Config.set('assets', "{{asset('assets')}}");</script>

<!-- Page -->
<script src={{asset("assets/js/Site.js")}}></script>
<script src={{asset("js/Plugin/asscrollable.js")}}></script>
<script src={{asset("js/Plugin/slidepanel.js")}}></script>
<script src={{asset("js/Plugin/switchery.js")}}></script>
<script src={{asset("js/Plugin/matchheight.js")}}></script>
<script src={{asset("js/Plugin/jvectormap.js")}}></script>
<script src={{asset("js/Plugin/peity.js")}}></script>
<script src={{asset("js/Plugin/peity.js")}}></script>
<script src=http://malsup.github.io/jquery.blockUI.js></script>

<script src={{asset("assets/examples/js/dashboard/v1.js")}}></script>

@yield('scripts')
</body>


</html>
