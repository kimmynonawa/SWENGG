<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo ($this->session->userdata('org')[0]['acronym']);?></title>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
	
	<script src= "<?php echo base_url();?>js/jquery.js"> </script>
	<script src= "<?php echo base_url();?>js/jquery.min.js"></script>
	<script src= "<?php echo base_url();?>js/jquery.validate.min.js"></script>
	
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
        <div class="col-md-3 left_col ">
          <div class="clearfix"></div>
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section nav side-menu"> 
            <br>      
            <li><a href="http://localhost/index.php/org/add"><i class="fa fa-edit side-menu"></i>Add New Organization</a></li>
            <li><a href="http://localhost/index.php/org/edit"><i class="fa fa-edit side-menu"></i>Edit Organization Details</a></li>
            <li><a href="http://localhost/index.php/gosm/accept"><i class="fa fa-edit side-menu"></i>Accept GOSM</a></li>
            <li><a href="http://localhost/index.php/gosm/viewCSOGosm1"><i class="fa fa-edit side-menu"></i>View GOSM</a></li>
            <li><a href="http://localhost/index.php/ViewPreacts/ViewPreacts"><i class="fa fa-edit side-menu"></i>View Pre-Acts</a></li>
          </div>
        </div>
      </div>
    </div>
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li class="userIcon">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <span class="fa fa-user fa-fw"></span> <?php echo ($this->session->userdata('org')[0]['name']);?>
                  <span class="fa fa-caret-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="http://localhost/index.php/account/login"><i class="fa fa-sign-out"></i> Log Out</a></li>
                </ul>
              </li>
			  
             <li role="presentation" class="dropdown">
                <a id="but" href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope fa-fw"></i>
                  <i class="fa fa-caret-down"></i>
                  <div id="num"> </div>
                </a>
                  <ul name="notif" id="menu1" class="dropdown-menu dropdown-usermenu pull-right" role="menu" style="width: 300px; height: 200px; overflow: auto">
					<!--NOTIFICATION HERE-->
					<li><a href="http://localhost/index.php/account/logout">insert notifs here</a></li>
                  </ul>
                <li><a href="http://localhost/index.php/account/cso"><i class="fa fa-home"></i> Home</a></li>
              </li>
            </ul>
          </nav>
        </div>
      </div>


     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CSO Chart Details</h3>
              </div>

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
					<form action= "ORG_Home.html" method="post">
						<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
						  <div class="x_title">
							<h2>ORGANIZATION NAME </h2> 
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							<span class="section">Activity Information</span>
								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Activity Name: </label>
									<p> <?php echo $activity[0]['title'];?></p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Goals: </label>
									<p><?php echo $activity[0]['goals'];?></p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Brief Description: </label>
									<p><?php echo $activity[0]['description'];?></p>
								</div>
								

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Measures: </label>
									<p><?php echo $activity[0]['measures'];?></p>
								</div>
								
								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Person In Charge: </label>
									<p><?php echo $activity[0]['personincharge'];?></p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">GOSM Target Date: </label>
									<p><?php 
									$fromdate = $activity[0]['fromdate'];
									$fromdatenew = strtotime($fromdate);
									$formatted_fromdate = date('F d, Y', $fromdatenew);
									echo $formatted_fromdate;?> 
									- 
									<?php 
									$todate = $activity[0]['todate'];
									$todatenew = strtotime($todate);
									$formatted_todate = date('F d, Y', $todatenew);
									echo $formatted_todate;?></p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Venue: </label>
									<p><?php echo $activity[0]['venue'];?></p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Activity Nature: </label>
									<p><?php echo $activity[0]['activitynature'];?></p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Activity Type: </label>
									<p><?php echo $activity[0]['activitytype'];?></p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Related to: </label>
									<p><?php 
									if ($activity[0]['reto'] == 1){
										echo 'Yes';
									}
									else{
										echo 'No';
									}
									?></p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Budget Breakdown: </label>
									<p><?php echo $activity[0]['budget'];?></p>
								</div>
						  </div>
					  </div> <!-- end of inner col-md-12 col-sm-12 col-xs-12"-->
								
						
						<button type="submit" class="btn btn-success col-md-offset-11" id="submit">NEXT</button>
        
              </div> <!-- END OF -ROW- DIV -->
              </form>
            </div> <!-- END OF X PANEL -->
          </div> <!-- END OF col-md-12 col-sm-12 col-xs-12 -->
        </div> <!-- END OF ROW FINAL!!!!!!!! -->

        <!-- HI KIM IF YOU'RE READING THIS YUNG BUTTON TYPE TO INPUT TYPE YUNG INIBA DI KO NA BINAGO YUNG ALIGNMENT TY!!!-->
						
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
