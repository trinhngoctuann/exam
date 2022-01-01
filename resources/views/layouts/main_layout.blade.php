<!--
    This is main_layout. It include only <head> of the page, navbar and footer
    The ".wrapper" element (which have "yield('content')") might contain
        the login or register ... forms (the blade files in "auth" directory)
        the sidebar with vue component beside (the "layouts/container_layout.blade.php")
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online Examination</title>

    <!-- All these css files was pasted to the public folder (asset) -->
    <link type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('images/icons/css/font-awesome.css')}}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <!-- We cannot link to css/app.css because It will cause a version conflict between Bootstrap v2 and v4 -->
    <link rel="stylesheet" href=" {{asset('css/custom.css')}} ">
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>
            <a class="brand" href="{{route("home") }}">Online Examination </a>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav nav-icons">
                        <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                        <li><a href="#"><i class="icon-eye-open"></i></a></li>
                        <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                    </ul>
                    <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                    </form>
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Item No. 1</a></li>
                                <li><a href="#">Don't Click</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Example Header</li>
                                <li><a href="#">A Separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Support </a></li>
                        <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{url('images/user.png')}}" class="nav-avatar" />
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Your Profile</a></li>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li>
                                    <form action="{{route("logout")}}"  method="post" >
                                        @csrf
                                        <input type="submit" value="Log Out"
                                            class="btn btn-light" style="width: 100%" />
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->

    <div class="wrapper">
        @yield('content')
    </div>

    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; Made by Minh Khoi </b>All rights reserved.
        </div>
    </div>

    <!-- All these javascript files was pasted to the public folder (asset) -->
    <!-- And These are the scripts of theme Edmin -->
    <script src="{{asset('scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('scripts/jquery-ui-1.10.1.custom.min.j')}}s" type="text/javascript"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{asset('scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{asset('scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{asset('scripts/common.js')}}" type="text/javascript"></script>
    <!-- And this is VUE Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
