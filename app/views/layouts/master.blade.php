<!DOCTYPE html>

<html lang="en">

<head id="Starter-Site">

    <meta charset="UTF-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        @section('title') {{ Config::get('setting.site.name') }} @show
    </title>

    <!--  Mobile Viewport Fix -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- This is the traditional favicon.
     - size: 16x16 or 32x32
     - transparency is OK
     - see wikipedia for info on browser support: http://mky.be/favicon/ -->
    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">

    <!-- CSS -->
    {{ HTML::style('assets/css/vendor.min.css') }} {{ HTML::style('assets/css/app.min.css') }} @yield('styles')

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">{{ Config::get('setting.site.name') }}</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!--<li class="{{ (Request::is('/') ? ' active' : '') }}"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>-->
                    <!--<li><a href="{{ URL::to('random') }}" title="Random"><i class="fa fa-random"></i></a></li>
                    <li><a href="{{ URL::to('upload') }}" title="Upload"><i class="fa fa-upload"></i></a></li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check()) @if (Auth::user()->hasRole('admin'))
                    <li class="dropdown {{ (Request::is('admin/user*|admin/role*') ? ' active' : '') }}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/user') }}}">
                Admin Tasks <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li {{ (Request::is( 'admin/user*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/users') }}}">Users</a></li>
                            <li {{ (Request::is( 'role*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/roles') }}}">Roles</a></li>
                        </ul>
                    </li>
                    @endif
                    <li class="dropdown {{ (Request::is('user*') ? ' active' : '') }}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}} <span class="caret"></span>
              </a>
                        <ul class="dropdown-menu">
                            <li {{ (Request::is( 'user*') ? ' class="active"' : '') }}>
                                <a href="{{{ URL::to('user') }}}">Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                    @else
                    <li {{ (Request::is( 'user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                    @endif
                    <li class="dropdown">
                        <a id="menu-button" class="navbar-toggle" data-toggle="dropdown" href="#">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a id="menu-text" class="dropdown-toggle" data-toggle="dropdown" href="#">Menu</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Blah</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <!-- Container -->
    <div class="container">

        <!-- Content -->
        @yield('content')
        <!-- ./ content -->

    </div>
    <!-- ./ container -->

    <!-- Footer -->
    <footer class="clearfix">
        @yield('footer')
    </footer>
    <!-- ./ Footer -->

    <!-- Javascripts -->
    {{ HTML::script('assets/js/jquery.min.js') }} {{ HTML::script('assets/js/vendor.min.js') }} {{ HTML::script('assets/js/app.min.js') }} @yield('scripts')

</body>

</html>
