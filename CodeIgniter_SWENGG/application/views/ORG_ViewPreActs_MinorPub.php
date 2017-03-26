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
                <img src="<?php echo base_url();?>images/user.png" alt="..." class="img-circle profile_img">
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
				  <li><a href="http://localhost/index.php/account/org"><i class="fa fa-home"></i> Home <span ></span></a></li>
                  <li><a href="http://localhost/index.php/gosm/add"><i class="fa fa-table"></i> Add New GOSM <span ></span></a></li>
                  <li><a href="http://localhost/index.php/PreActivity/preacts"><i class="fa fa-edit"></i> Add Pre-Activity <span ></span></a></li>				  
				  <li><a href="#"><i class="fa fa-calendar"></i> Calendar <span ></span></a></li>
				  <li><a href="http://localhost/index.php/gosm/viewORGGosm1"><i class="fa fa-list-alt"></i> GOSM <span ></span></a></li>
				</ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

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
                    <li><a href="http://localhost/index.php/account/login"><i class="fa fa-sign-out"></i> Log Out</a></li>
                  </ul>
                </li>
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
                            <span class="section">General Details</span>
                             <div class="item form-group">
                                <label class="control-label col-md-3">Date Created:</label>
                                <p> date</p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Name of Publication</label>
                                <p> pub </p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Projected Date of Release:</label>
                                <p> release </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Type of Publication:</label>
                                <p> type </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Frequency:</label>
                                <p> f </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Estimated Cost</label>
                                <p> cost </p>
                            </div> 
                            <span class="section">Publication Details</span>
                            <div class="item form-group">
                                <label class="control-label col-md-3">Concept of Publication:</label>
                                <p> concept</p>
                            </div> 
                            <span class="section">Objectives</span>
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 1:</label>
                                <p>1</p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 2:</label>
                                <p> 2 </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 3:</label>
                                <p> 3 </p>
                            </div> 
                            <span class="section"> Proposed Content </span>
                            <div class="item form-group">
                                <label class="control-label col-md-3">Content 1:</label>
                                <p> 1 </p>
                            </div> 
                            <span class="section">Objectives</span>
                            <div class="item form-group">
                                <label class="control-label col-md-3">Content 2:</label>
                                <p> 2</p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3"> Content 3</label>
                                <p> content 3 </p>
                            </div> 
                            <span class="section">Target Readers</span>
                            <div class="item form-group">
                                <label class="control-label col-md-3">Target 1</label>
                                <p> 1 </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Target 2</label>
                                <p> 2 </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Target 3</label>
                                <p> 3 </p>
                            </div> 
                            <span class="section">Printing Specification</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center"> Number of Pages</div></th>
                                <th><div align="center">Spread Size</div></th>
                                <th><div align="center">Type of Paper</div></th>
                                <th><div align="center">Number of Color</div></th>
                                <th><div align="center">Number of Copies</div></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">this</td>
                                    <td width="20%" align="center">lol</td>
                                </tr>
                            </tbody>
                            </table>
                            <span class="section">Editorial Members</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center"> Member 1</div></th>
                                <th><div align="center">member 2</div></th>
                                <th><div align="center">member 3</div></th>
                                <th><div align="center">member 4</div></th>  
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