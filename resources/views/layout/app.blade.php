<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{ url ('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url ('css/style.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="{{ url('/js/bootstrap.min.js')}}"></script>
        <script src="{{ url ('/js/style.js') }}"></script>
        <title>Dashboard</title>
    </head>
    <body class="home">
        <div class="container-fluid display-table">
            <div class="row display-table-row">
                <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                    <div class="logo">
                        <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                            <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                        </a>
                    </div>
                    <div class="navi">
                        <ul>
                            <li><a href="{{ url('/beranda') }}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Beranda</span></a></li>
                            <li><a href="{{ url('/aspirasi') }}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Aspirasi</span></a></li>
                            <li><a href="{{ url('/berita') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Berita</span></a></li>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-sm-11 display-table-cell v-align">
                    <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                    <div class="row">
                        <header>
                            <div class="col-md-7">
                                <nav class="navbar-default pull-left">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                </nav>
                                <div class="search hidden-xs hidden-sm">
                                    <input type="text" placeholder="Search" id="search">
                                </div>
                            </div>
                        </header>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </body>

</html>

