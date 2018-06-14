<!DOCTYPE html>
<html lang="en">
  
  <head>
  <?php
  include "includes\config.php";
  session_start();
  error_reporting(0);
  ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sophomore Scoop</title>

    <!-- Bootstrap -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index1.php" class="site_title"> <span>Sophomore scoop</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images\adicon.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>ADMIN</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a>Student Accounts<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?pages=addstud">Upload</a></li>
                      <li><a href="?pages=viewstud">View</a></li>                    
					</ul>
                  </li>
                  <li><a>Attendance <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?pages=imp">Upload</a></li>
                      <li><a href="?pages=viewatt">View</a></li>
                    
                    </ul>
                  </li>
                  <li><a>Internal Marks <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?pages=internal_post">Upload</a></li>
                      <!--<li><a href="?pages=viewintern">View</a></li>-->
			 
                    </ul>
                  </li>
                  <li><a>News & Notifications<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?pages=neno">Upload</a></li>
                      <li><a href="?pages=viewneno">View</a></li>
                    </ul>
                  </li>
                                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li clogout="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images\adicon.png" alt="">ADMIN
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li>
                     <a href="?pages=change_pswd">Settings</a>
                    </li>
                    
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                             </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
		<div class="right_col" role="main" style="background-image: url(images/wood1.png); height:1000px;">
		
			<?php
        include "pages.php";
      ?>
		</div>
		
<!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
   <!-- <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
   <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
    <!-- Chart.js -->
    <!-- <script src="../vendors/Chart.js/dist/Chart.min.js"></script> -->
    <!-- gauge.js -->
    <!-- <script src="../vendors/gauge.js/dist/gauge.min.js"></script> -->
    <!-- bootstrap-progressbar -->
    <!-- <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> -->
    <!-- iCheck -->
    <!-- <script src="../vendors/iCheck/icheck.min.js"></script> -->
    <!-- Skycons -->
    <!-- <script src="../vendors/skycons/skycons.js"></script> -->
    <!-- Flot -->
    <!-- <script src="../vendors/Flot/jquery.flot.js"></script> -->
    <!-- <script src="../vendors/Flot/jquery.flot.pie.js"></script> -->
    <!-- <script src="../vendors/Flot/jquery.flot.time.js"></script> -->
    <!-- <script src="../vendors/Flot/jquery.flot.stack.js"></script> -->
    <!-- <script src="../vendors/Flot/jquery.flot.resize.js"></script> -->
    <!-- Flot plugins -->
    <!-- <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script> -->
    <!-- <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script> -->
    <!-- <script src="../vendors/flot.curvedlines/curvedLines.js"></script> -->
    <!-- DateJS -->
    <!-- <script src="../vendors/DateJS/build/date.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script> -->
    <!-- <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
    <!-- <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="../vendors/moment/min/moment.min.js"></script> -->
    <!-- <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
