<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo ($this->session->userdata('org')[0]['acronym']);?></title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
            <!--<div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Yo!</span></a>
            </div> -->

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>images/cso2.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?php echo ($this->session->userdata('org')[0]['acronym']);?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="http://localhost/index.php/account/cso"><i class="fa fa-home"></i> Home <span ></span></a></li>
                  <li><a href="http://localhost/index.php/org/add"><i class="fa fa-table"></i> Add New Organization <span ></span></a></li>
                  <li><a href="#"><i class="fa fa-calendar"></i> Calendar <span ></span></a></li>
                  <li><a href="http://localhost/index.php/gosm/viewCSOGosm1"><i class="fa fa-list-alt"></i> GOSM <span ></span></a></li>
                  <li><a href="#"><i class="fa fa-list-alt"></i> PreActs <span ></span></a></li>    
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

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   <?php echo ($this->session->userdata('org')[0]['name']);?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="http://localhost/index.php/account/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <!--NOTIF-->
                <li role="presentation" class="dropdown">
                  <a id="but" href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <div id="num">
                        
                    </div>
                  </a>
                  <ul name="notif" id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu" style="width: 300px; height: 200px; overflow: auto">
                    <!--NOTIFICATION HERE-->
                    
                  </ul>
                  <!--NOTIF-->
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

     <!-- page content -->
        <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>View Project Proposal</h3>
                </div>
            </div>

            <div class="clearfix"></div>
     

            <div class="x_panel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <br><br>   
                            <table id="table" class="table table-striped table-bordered table-hover" style="width:300px">
                                <thead>
                                    <th><div align="center">Filled Out Requirements</div></th>
                                </thead>
                                <tbody>
                                    <tr> <td align="center"> Aform</td><tr>
                                    <tr> <td align="center"> PPR</td><tr>
                                    <tr> <td align="center"> Minor Pub</td><tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <span class="section">Requesting Details</span>
                             <div class="item form-group">
                                <label class="control-label col-md-3">Date Created:</label>
                                <p> date</p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Office Location:</label>
                                <p> loc</p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Telephone Number</label>
                                <p> no </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">ID Number</label>
                                <p> type </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Mobile Number:</label>
                                <p> type </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3"> Email Address:</label>
                                <p> March 20, 2016 </p>
                            </div> 
                            <span class="section">Activity Details</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center"> Request Number</div></th>
                                <th><div align="center">Start Date</div></th>
                                <th><div align="center">End Date</div></th>
                                <th><div align="center">Start Time</div></th>
                                <th><div align="center">End Time</div></th>
                                <th><div align="center">Venue</div></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">this</td>
                                    <td width="20%" align="center">lol</td>
                                    <td width="20%" align="center">lol</td>
                                </tr>
                            </tbody>
                            </table>
                            <div class="item form-group">
                                <label class="control-label col-md-3"> Total Number of Persons:</label>
                                <p> no</p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3"> With Outsiders:</label>
                                <p> yes</p>
                            </div> 
                            <span class="section">Faculty-In-Charge</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center">Name</div></th>
                                <th><div align="center">Classification</div></th>
                                <th><div align="center">Mobile Number</div></th>
                                <th><div align="center">Email Address</div></th>  
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">this</td>
                                </tr>
                            </tbody>
                            </table>
                                <span class="section">Source of Funds</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center">Organizational Funds</div></th>
                                <th><div align="center">Participants Fee</div></th>
                                <th><div align="center"> Other shit</div></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">this</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
        </div> 
        <!-- /page content -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>vendors/jquery/dist/jquery.min.js"></script>
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
