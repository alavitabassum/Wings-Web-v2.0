
<?php
require_once 'db.php';
get_menus();
display_menu();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard | Nilai Booking System</title>
  
  <meta property="og:url" content="http://alavi-works.printf.com.bd/wings/" />
	<meta property="og:type" content="Order Fulfilment Service" />
	<meta property="og:title" content="Wings v0.2" />
	<meta property="og:description" content="Order Fulfilment Service | PaperFly Private Limited" />
	<meta property="og:image" content="http://alavi-works.printf.com.bd/PFLogoFull.png" />
	<!--favicon-->
	<link rel="icon" type="image/png" href="img/wings_favicon.png" sizes="16x16">
	<link rel="icon" type="image/png" href="img/wings_favicon.png" sizes="32x32">

	<!-- for IE -->
	<link rel="icon" type="image/x-icon" href="img/wings_favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="img/wings_favicon.ico" />
	<link rel="shortcut icon" href="img/wings_favicon.ico">

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

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.css " rel="stylesheet">
  <link href="../build/css/modal.css " rel="stylesheet">
  <link href="../build/css/timeline-style.css " rel="stylesheet">
  
  <!-- onload modal CDN -->
  <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>



    <link rel="stylesheet" type="text/css" href="../vendors/jquerysteps/css/jquery.steps.css ">
    <link rel="stylesheet" type="text/css" href="../vendors/jquerysteps/css/main.css ">
    <link rel="stylesheet" type="text/css" href="../vendors/jquerysteps/css/normalize.css ">  

  <script src="../vendors/jquery/dist/jquery.min.js "></script>
  <script src="../vendors/jquerysteps/js/jquery.steps.js "></script>  

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title">
              <i>
                <img  class="smalllogo"  src="images/nilai-N.png"> </i>
              <img class="full_logo" src="images/Logo-Nilai-University-200.png" />
            </a>
          </div>

          <div class="clearfix"></div>

       
          <!-- menu profile quick info -->
          <div class="profile clearfix">
         <!--<div class="profile_pic">
              <img src="images/img.png" alt="..." class="img-circle profile_img">
            </div> -->   
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>  <?php echo getUserAccessRoleByID($_SESSION['user_role_id']); ?> </h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
         
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
            <?= display_menu()  ?>
          </div>

          </div>

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
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
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
                  <img src="images/img.png" alt=""> Md  Islam
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

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>


          <div class="row">
   
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 1em;">
              <span class="label label-info">Order Count:3655</span>
              <span class="label label-primary" style="color: black;">New Orders For Delivery:49</span>
            </div>
          </div>

          <div class="clearfix"></div>
          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Order Tracker</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">



                  <!-- Modal -->
                  <div class="modal rightside fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog-right" role="document">
                      <div class="modal-content-right">

                        <div class="modal-header-right">
                          <button type="button" class="rightmodal close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body-right">

                          <!-- Product info in modaal-->
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 modal-product-details">
                            <h3>Tracking Details - <span>EXCHANGE PRODUCT</span></h3>
                            <div class="row info-row">
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-8 col-md-offset-8 col-sm-offset-0 col-xs-offset-0 timestamp-modal-right">
                                <ul>
                                  <li>
                                    Order ID: 0800228-0157-A5-1Q
                                  </li>
                                  <li>
                                    Order Time: 08:37
                                  </li>
                                </ul>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod-info-banner">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 product-list first-bq">
                                  <blockquote>
                                    <h4>Pick Up Details</h4>
                                    <ul>
                                      <li>
                                        Merchant:
                                        <span>AjkerDeal.com</span>
                                      </li>
                                      <li>
                                        Pick Up from:
                                        <span>AjkerDeal.com</span>
                                      </li>
                                      <li>
                                        Pick Up address:
                                        <span>Sumona Goni Trade Center,Plot-2, Level-5, Panthapath, Karwan Bazar,Tejgaon Shilpanchal
                                        </span>
                                      </li>
                                      <li>
                                        Phone number:
                                        <span>01844172328</span>
                                      </li>

                                    </ul>
                                  </blockquote>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 product-list scnd-bq">
                                  <blockquote>
                                    <h4>Package Details</h4>
                                    <ul>
                                      <li>
                                        Package Option:
                                        <span>Standard</span>
                                      </li>
                                      <li>
                                        Delivery Option:
                                        <span>Regular</span>
                                      </li>
                                      <li>
                                        Product Brief:
                                        <span> Screwdriver Set + Card Holder - 41% OFF
                                        </span>
                                      </li>
                                      <li>
                                        Package Price:
                                        <span>890</span>
                                      </li>

                                    </ul>
                                  </blockquote>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 product-list thrd-bq">
                                  <blockquote>
                                    <h4>Customer Details</h4>
                                    <ul>
                                      <li>
                                        Name:
                                        <span>Md Ashraf Hossun</span>
                                      </li>
                                      <li>
                                        Address:
                                        <span>satkhira sadar , Satkhira Sadar</span>
                                      </li>
                                      <li>
                                        Phone number:
                                        <span>01722401872</span>
                                      </li>

                                    </ul>
                                  </blockquote>
                                </div>
                              </div>
                            </div>


                            <!-- Order timeline-->
                            <section class="cd-timeline js-cd-timeline timeline-body">
                              <div class="cd-timeline__container">

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator-pending"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14 (default)
                                      <span class="note"></span>
                                    </span>

                                    <h2>Close Order</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator-pending"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14 (default)
                                      <span class="note"></span>
                                    </span>

                                    <h2>CP1</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator-pending"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14 (default)
                                      <span class="note"></span>
                                    </span>

                                    <h2>Banking</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14
                                      <span class="note">Cash received by Manager. Waiting to be banked.</span>
                                    </span>

                                    <h2>DP2</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14
                                      <span class="note">Cash Received by Majhar</span>
                                    </span>

                                    <h2>Cash</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14
                                      <span class="note">Reached Delivery Outpost. Appointment confirmed for delivery</span>
                                    </span>

                                    <h2>Delivery Outpost</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--movie js-cd-img indicator"> </div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14
                                      <span class="note">Loaded into the Shuttle</span>
                                    </span>

                                    <h2>Shuttle 2</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">15:00, Jan 4
                                      <span class="note">Packaged and Sorted.Ready for shutttle 2</span>
                                    </span>
                                    <h2>Packaging and Sorting</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--location js-cd-img indicator"> </div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">12:00, Jan 4
                                      <span class="note">Data Entry</span>
                                    </span>

                                    <h2>Pre Processing</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--location js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">10:00, Jan 2
                                      <span class="note">by Tonoy Sarkar</span>
                                    </span>

                                    <h2>DP1</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--movie js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">09:00, Jan 2
                                      <span class="note">Order Picked u pby Tonoy Sarkar</span>
                                    </span>

                                    <h2>Pick Up</h2>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <!-- cd-timeline -->
                            <div class="class=col-lg-12 col-md-12 col-sm-12 col-xs-12 fadedScroller_fade"></div>
                          </div>
                        </div>

                      </div>
                      <!-- modal-content -->
                    </div>
                    <!-- modal-dialog -->
                  </div>
                  <!-- modal -->


                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                    <thead class="tracker-thead">
                      <tr>
                        <th> Order ID</th>
                        <th>Merchant ID</th>
                        <th>Merchant Name</th>
                        <th>Barcode</th>
                        <th>Pick Up Exe.</th>
                        <th>Latest Status</th>
                        <th>Order History</th>
                      </tr>
                    </thead>
                    <tbody class="tracker_tbody">

                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>DP2</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Banked</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Shuttle 2</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Shuttle 2</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

     
    </div>
  </div>

  <!-- / promo modal script-->

      <!-- /page content -->

      <!-- footer content -->
      <!-- <footer>
        <div class="pull-right">
          PaperFly - Copyright
          <a href="http://www.paperfly.com.bd/">Paperfly Private Limited</a>
        </div>
        <div class="clearfix"></div>
      </footer> -->
      <!-- /footer content -->
    </div>
  </div>

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

</body>

</html>