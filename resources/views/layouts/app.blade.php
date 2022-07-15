<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Klinik</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('klinik-template/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('klinik-template/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('klinik-template/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('klinik-template/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('klinik-template/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('klinik-template/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('klinik-template/assets/scss/style.css')}}">
    <link href="{{ asset('klinik-template/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('klinik-template/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><h3>App Klinik</h3></a>
                <a class="navbar-brand hidden" href="./"><h3>AK</h3></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @include('components.navbar')
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('klinik-template/images/admin.jpg')}}" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            </form>
                    </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        @yield('breadcrumbs')

        <div class="content mt-3">

            @yield('content')
        </div>
            
    <!-- Right Panel -->
    <script src="{{ asset('klinik-template/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ asset('klinik-template/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/main.js')}}"></script>

    <script src="{{ asset('klinik-template/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/jszip.min.js')}}"></script>
    {{-- <script src="{{ asset('klinik-template/assets/js/lib/data-table/pdfmake.min.js')}}"></script> --}}
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('klinik-template/assets/js/lib/data-table/datatables-init.js')}}"></script>

</body>
</html>
