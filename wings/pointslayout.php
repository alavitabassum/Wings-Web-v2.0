<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Points | Wings v2.0</title>

    
    <!-- Added tags-->
   <meta property="og:url" content="http://alavi-works.printf.com.bd/wings/" />
	<meta property="og:type" content="Order Fulfilment Service" />
	<meta property="og:title" content="Wings v0.2" />
	<meta property="og:description" content="Order Fulfilment Service | PaperFly Private Limited" />
	<meta property="og:image" content="http://alavi-works.printf.com.bd/PFLogoFull.png" />
	<!--favicon-->
	<link rel="icon" type="image/png" href="../img/wings_favicon.png')}}" sizes="16x16">
	<link rel="icon" type="image/png" href="../img/wings_favicon.png')}}" sizes="32x32">

	<!-- for IE -->
	<link rel="icon" type="image/x-icon" href="../img/wings_favicon.ico')}}">
	<link rel="shortcut icon" type="image/x-icon" href="../img/wings_favicon.ico')}}" />
	<link rel="shortcut icon" href="../img/wings_favicon.ico')}}">

	<meta name="description" content="Paperfly Private Limited" />
	<meta name="keywords" content="PaperFly, Wings, PaperFly Private Limited, Order tracker"
	/>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">



    <link rel="stylesheet" href="css/timeline-style.css">
    <!-- timeline css -->

    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title">
                            <i>
                                <img src="images/logo.png"> </i>
                                <img class="full_logo" src="images/Wings.jpg" />
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Shahriar Hasan</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        @include('includes.sidebar')
                                <!-- /sidebar menu -->


                                <div class="sidebar-footer hidden-small">
                                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                    </a>
                                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                    </a>
                                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                    </a>
                                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- top navigation -->
                        <div class="top_nav">
                            <div class="nav_menu">
                                <nav>
                                    <div class="nav toggle">
                                        <a id="menu_toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="">
                                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <img src="images/img.jpg" alt="">Shahriar Hasan
                                                <span class=" fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                                <li>
                                                    <a href="javascript:;"> Profile</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="badge bg-red pull-right"></span>
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Help</a>
                                                </li>
                                                <li>
                                                    <a href="login.html">
                                                        <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- /top navigation -->

                            <!-- page content -->
                            @yield('content')
                        </div>

                        <!-- Popup msg script-->
                        <script>
                            function dltInfo() {
                                var x = document.getElementById("dltMsg");
                                var y = document.getElementById("cnclMsg");
                                x.style.display = "block";
                                y.style.display = "none";
                            }
                            function cnclInfo() {
                                var x = document.getElementById("dltMsg");
                                var y = document.getElementById("cnclMsg");
                                x.style.display = "none";
                                y.style.display = "block";
                            }
                        </script>
                        <!-- jQuery -->
                        <script src="../vendors/jquery/dist/jquery.min.js"></script>
                        <!-- Bootstrap -->
                        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                        <!-- FastClick -->
                        <script src="../vendors/fastclick/lib/fastclick.js"></script>
                        <!-- NProgress -->
                        <script src="../vendors/nprogress/nprogress.js"></script>
                        <!-- iCheck -->
                        <script src="../vendors/iCheck/icheck.min.js"></script>
                        <!-- Datatables -->
                        <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                        <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                        <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                        <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
                        <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
                        <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
                        <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
                        <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
                        <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
                        <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                        <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
                        <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
                        <script src="../vendors/jszip/dist/jszip.min.js"></script>
                        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
                        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

                        <!-- Custom Theme Scripts -->
                        <script src="../build/js/custom.js"></script>
                        <!-- Dropzone.js -->
                        <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>
                        <!-- bootstrap-daterangepicker -->
                        <script src="../vendors/moment/min/moment.min.js"></script>
                        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
                        <!-- bootstrap-datetimepicker -->
                        <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
                        <!-- Ion.RangeSlider -->
                        <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
                        <!-- jquery.inputmask -->
                        <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
                        <!-- jQuery Knob -->
                        <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>


                    </body>

                    </html>