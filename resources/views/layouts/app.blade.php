<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/gentelella/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 04:50:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>@yield('title')</title>

    <link href="https://colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://colorlib.com/polygon/vendors/nprogress/nprogress.css" rel="stylesheet">

    <link href="https://colorlib.com/polygon/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <link href="https://colorlib.com/polygon/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet">

    <link href="https://colorlib.com/polygon/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

    <link href="https://colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="https://colorlib.com/polygon/build/css/custom.min.css" rel="stylesheet">
    <meta name="robots" content="index, nofollow">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="" class="site_title"><i
                                class="fa fa-paw"></i> <span>Truyện Hay</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home</a></li>
                                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">General Form</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> UI Elements <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">General
                                                Elements</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="">Chart JS</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('admin/images/2.jpg') }}" alt="">
                                    @if($user = \Illuminate\Support\Facades\Auth::user())
                                    I
                                        {{ $user->name }}
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                        href="{{ route('logout') }}"><i
                                            class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>


            <div class="right_col" role="main">
                @yield('content')
            </div>


            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com/">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>

        </div>
    </div>

    <script src="https://colorlib.com/polygon/vendors/jquery/dist/jquery.min.js"></script>

    <script src="https://colorlib.com/polygon/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://colorlib.com/polygon/vendors/fastclick/lib/fastclick.js"></script>

    <script src="https://colorlib.com/polygon/vendors/nprogress/nprogress.js"></script>

    <script src="https://colorlib.com/polygon/vendors/Chart.js/dist/Chart.min.js"></script>

    <script src="https://colorlib.com/polygon/vendors/gauge.js/dist/gauge.min.js"></script>

    <script src="https://colorlib.com/polygon/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <script src="https://colorlib.com/polygon/vendors/iCheck/icheck.min.js"></script>

    <script src="https://colorlib.com/polygon/vendors/skycons/skycons.js"></script>

    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.js"></script>
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.time.js"></script>
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="https://colorlib.com/polygon/vendors/Flot/jquery.flot.resize.js"></script>

    <script src="https://colorlib.com/polygon/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="https://colorlib.com/polygon/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/flot.curvedlines/curvedLines.js"></script>

    <script src="https://colorlib.com/polygon/vendors/DateJS/build/date.js"></script>

    <script src="https://colorlib.com/polygon/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="https://colorlib.com/polygon/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="https://colorlib.com/polygon/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

    <script src="https://colorlib.com/polygon/vendors/moment/min/moment.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="https://colorlib.com/polygon/build/js/custom.min.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"66a636909af824b2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'>
    </script>
</body>

<!-- Mirrored from colorlib.com/polygon/gentelella/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jul 2021 04:50:39 GMT -->

</html>
