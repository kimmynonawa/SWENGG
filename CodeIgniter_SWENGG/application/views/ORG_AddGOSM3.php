<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LSCS</title>


    <!-- jQuery -->
    <script src= "<?php echo base_url();?>js/jquery.js"> </script>
    <!-- Bootstrap -->
     <link href="<?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>ORG NAME</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="ORG_Home.html"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                      <li><a href="ORG_AddGOSM.html">Add New GOSM</li>
                      <li><a href="ORG_PreAct.html">Pre-Activity Form</a></li>
                    </ul>
                  </li>
                  <li><a href="ORG_Calendar.html"><i class="fa fa-table"></i> Calendar <span class="fa fa-chevron-down"></span></a>
                  <li><a href="ORG_GOSM.html"><i class="fa fa-list-alt"></i> GOSM <span class="fa fa-chevron-down"></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
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
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   La Sallian Computer Society
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <div class="right_col" role="main">
          
          <div class="page-title">
              <div class="title_left">
                  <h3>Fill Out GOSM</h3>
              </div>
          </div>
          
          <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                          <form class="form-horizontal form-label-left" id= "gosmform3">
								<?php 
								var_dump ($this->session->userdata('phname'));
								?>
                              <div class="row" id="gnptg" >
                                  <span class="section">Others</span>
                                  <label> <h3> Photographer/s </h3> </label>
                              </div>

                            <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                 <button id="addptggosm3" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                 <button id="remptggosm3" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                               </div>
                            </div>


                            <div class="row" id="gnvdg" >
                                  <label> <h3> Videographer/s </h3> </label>
                              </div>

                            <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                 <button id="addvdggosm3" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                 <button id="remvdggosm3" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                               </div>
                            </div>

                            <div class="row" id="gnhst" >
                               <label> <h3> Host/s </h3> </label>
                            </div>

                            <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                 <button id="addhstgosm3" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                 <button id="remhstgosm3" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                               </div>
                            </div>


                            <div class="row" id="gneqp" >
                               <label> <h3> Equipment </h3> </label>
                            </div>

                            <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                 <button id="addeqpgosm3" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                 <button id="remeqpgosm3" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                 </div>
                            </div>

                            <div class="row" id="gnspk" >
                               <label> <h3> Speaker/s </h3> </label>
                            </div>

                            <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                 <button id="addspkgosm3" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                 <button id="remspkgosm3" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                               </div>
                            </div>


                            <div class="row" id="gnspn" >
                               <label> <h3> Sponsor/s </h3> </label>
                            </div>

                            <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                 <button id="addspngosm3" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                 <button id="remspngosm3" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                               </div>
                            </div>

                             <div class="ln_solid"></div> 
                                <div class="form-group">
                                  <div class="col-md-12 col-md-offset-11">
                                    <button id="nextbppr" type="submit" class="btn btn-success align: right">Next</button>
                                  </div>
                                </div>
                          </form>  
                        </div>
                    </div>
                </div>
            </div>

         </div>
        <!-- /page content -->
			
      <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.min.js"> </script>
    <script src="<?php echo base_url();?>js/validation.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>build/js/custom.min.js"></script>

  </body>
</html>
