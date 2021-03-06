
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user'])){
header('location: index.php');
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                           <!-- <li class="menu-title">Navigation</li>-->
                            <li>
                              
                                <a href="dashboard-2.php"><i class="fi-air-play"></i><span> Dashboard </span></a>
                            </li>
							<li>
                                <a href="employee/tables-layout2.php"><i class="fi-layout"></i> <span> EMPLOYEE </span> </a>
       
                            </li>


                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left"></h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a style="aling:left;" href="logout.php"><i class="fi-layout"></i> <span> logout </span> </a> </li></ol>
									</ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card-box">
                                <div class="row">
							

                                  <!--<div class="col-sm-4">
                                        <div class="card-box widget-box-four">
                                          <!--  <div id="dashboard-1" class="widget-box-four-chart"></div>-->
										 <div class="button-list">
                                        <button type="button" class="btn btn-pink btn-rounded w-md waves-effect waves-light" id='blorun'>256 Lorun Ipsum</button>
                                    </div>  <div class="wigdet-four-content pull-left">
                                               <h4 class="m-t-0 font-16 m-b-5 text-overflow" title="Total Revenue"></h4>
                                                <p class="font-secondary text-muted"></p>
                                                <!--<h3 class="m-b-0 m-t-20"><span>$</span> <span data-plugin="counterup"></span></h3>-->
												 
                                            </div>
                                            <!--<div class="clearfix"></div>
                                        </div>
										</div>-->
                                    
									<div class="button-list">
                                        <button type="button" class="btn btn-pink btn-rounded w-md waves-effect waves-light" id='blorun'>256 Lorun Ipsum</button>
                                    </div>
                                   		
                                            <div class="wigdet-four-content pull-left">
                                                <h4 class="m-t-0 font-16 m-b-5 text-overflow" title="Total Unique Visitors"></h4>
                                                <p class="font-secondary text-muted"></p>
                                               <!-- <h3 class="m-b-0 m-t-20"><span>$</span> <span data-plugin="counterup">65,241</span></h3>-->
                                            </div>
                                          <!--  <div class="clearfix"></div>
                                        </div>
                                    </div><!-- end col -->

                                   <!-- <div class="col-sm-4">
                                        <div class="card-box widget-box-four">
                                          <!--  <div id="dashboard-3" class="widget-box-four-chart"></div>-->
								<div class="button-list">
                                        <button type="button" class="btn btn-pink btn-rounded w-md waves-effect waves-light" id='blorun' onclick="location.href='present2day/tables-editable.php';">PRESENT TODAY</button>
                                    </div>

                                            <div class="wigdet-four-content pull-left">
                                                <h4 class="m-t-0 font-16 m-b-5 text-overflow" title="Number of Transactions"></h4>
                                                <p class="font-secondary text-muted"></p>
                                               <!-- <h3 class="m-b-0 m-t-20"><span>$</span> <span data-plugin="counterup">28,5960</span></h3>-->
                                            </div>
                                          <!--  <div class="clearfix"></div>
                                        </div>
                                    </div><!-- end col -->

                               <!-- </div>
								   <div class="col-sm-4">
                                        <div class="card-box widget-box-four">
                                          <!--  <div id="dashboard-3" class="widget-box-four-chart"></div>-->
								  <div class="button-list">
                                        <button type="button" class="btn btn-pink btn-rounded w-md waves-effect waves-light" id='blorun' onclick="location.href='record/datepic.php';">RECORD</button>
                                    </div>

                                            <div class="wigdet-four-content pull-left">
                                                <h4 class="m-t-0 font-16 m-b-5 text-overflow" title="Number of Transactions"></h4>
                                                <p class="font-secondary text-muted"></p>
                                               <!-- <h3 class="m-b-0 m-t-20"><span>$</span> <span data-plugin="counterup">28,5960</span></h3>-->
                                            </div>
                                           <!-- <div class="clearfix"></div>
                                        </div>
                                    </div><!-- end col -->

                                <!--</div>-->
                                <!-- end row -->
</div></div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <h4 class="header-title m-t-0">Stacked Bar Chart</h4>
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <div class="m-t-20 m-b-20">
                                                            <h4 class="m-b-10">2563</h4>
                                                            <p class="text-uppercase m-b-5 font-13 font-600">Lifetime total sales</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="m-t-20 m-b-20">
                                                            <h4 class="m-b-10">6952</h4>
                                                            <p class="text-uppercase m-b-5 font-13 font-600">Income amounts</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="m-t-20 m-b-20">
                                                            <h4 class="m-b-10">1125</h4>
                                                            <p class="text-uppercase m-b-5 font-13 font-600">Total visits</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="morris-bar-stacked" style="height: 310px;"></div>

                                        </div>

                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->

                            </div><!-- end col -->

                        
                        <!-- end row -->
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Sparkline charts -->
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard-2.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/adminox_1.1/b4/default/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2017 11:39:49 GMT -->
</html>