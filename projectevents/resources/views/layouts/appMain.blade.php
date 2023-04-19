<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard panel </title>

    <!-- Bootstrap -->
    <link href='{{ asset("components/bootstrap/dist/css/bootstrap.min.css") }}' rel="stylesheet">

    <link href='{{ asset("components/js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css") }}' rel="stylesheet">

    <!-- Font Awesome -->
    <link href='{{ asset("components/css/font-awesome/css/font-awesome.min.css") }}' rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href='{{ asset("components/css/custom.min.css") }}' rel="stylesheet">
    <!-- My Custom Theme Style -->
    <link href='{{ asset("components/css/myTheme.css") }}' rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#">Project events</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <hr class="my-2">
                    <hr class="my-2">
                    <hr class="my-2">
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events">Events</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mr-auto dk-right">
                        @if(Auth::guest())
                        <li class="nav-item active">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                        @else
                        <li class="nav-item active">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
            <!-- Navbar -->
            <!-- Page content -->
            @yield('content')
            
            <!-- Page content -->
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src='{{ asset("components/js/dist/jquery.min.js") }}'></script>
    <!-- Bootstrap -->
    <script src='{{ asset("components/bootstrap/dist/js/bootstrap.bundle.min.js") }}'></script>
    <script src='{{ asset("components/js/bootstrap-progressbar/bootstrap-progressbar.min.js") }}'></script>
    <!-- Custom Theme Scripts -->
    <script src='{{ asset("components/js/custom.min.js") }}'></script>
</body>

</html>