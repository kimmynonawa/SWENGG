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
                    <h3>View Activity Form</h3>
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
                                     <?php
								    if($aformexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/viewaform"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'A-Form';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($lopexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/viewLOP"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'List of Participants';
										echo '</td><tr>';
                                    
									}
									?>
									
									
                                    <?php
								    if($contestexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/view_contest_mechanics"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Contest Mechanics';
										echo '</td><tr>';
                                    
									}
									?>
									
                                    <?php
								    if($foodexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/view_food_permit"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Food Permit';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($trademarkexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/view_trademark_use"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Trademark Use';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($minorpubexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/ORGminorPubView"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Minor Publication Proposal';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($sasexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/ORGsasview"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Special Approval Slip';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($spcaexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/ORGspcaview"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Special Permit Campus Access';
										echo '</td><tr>';
                                    
									}
									?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <span class="section">Request Details</span>
                            <!--  <div class="item form-group">
                                <label class="control-label col-md-3">Date Created:</label>
                                <p> date</p>
                            </div>   -->
                           <div class="item form-group">
                                <label class="control-label col-md-3">Activity Title:</label>
                                <p> <?php echo $activityDetails[0]['title'] ?> </p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Date:</label>
                                <p> 
                                    <?php 
                                        $startDate = new DateTime($activityDetails[0]['startdate']); 
                                        $startDate = date_format($startDate, 'F j, Y');

                                        $endDate = new DateTime($activityDetails[0]['enddate']); 
                                        $endDate = date_format($endDate, 'F j, Y');

                                        echo $startDate." - ".$endDate;
                                    ?> 
                                </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Time:</label>
                                <p> <?php echo $activityDetails[0]['starttime']." - ".$activityDetails[0]['endtime'] ; ?> </p>
                               
                            </div> 

                            <div class="item form-group">
                                <label class="control-label col-md-3">Name:</label>
                                <p><?php echo $requestInfo[0]; ?></p>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3">ID Number:</label>
                                <p><?php echo $requestInfo[1]; ?></p>
                            </div>
                              <div class="item form-group">
                                <label class="control-label col-md-3">Mobile Number:</label>
                                <p><?php echo $requestInfo[4]; ?></p>
                            </div>
                              <div class="item form-group">
                                <label class="control-label col-md-3">Local Number:</label>
                                <p><?php echo $requestInfo[5]; ?></p>
                            </div>
                              <div class="item form-group">
                                <label class="control-label col-md-3">Position:</label>
                                <p><?php echo $requestInfo[2]; ?></p>
                            </div>
                           <span class="section"> Food Items Allowed Entry </span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center">Quantity</div></th>
                                <th><div align="center">Unit</div></th>
                                <th><div align="center">Description</div></th>
                                <th><div align="center">Estimated Cost</div></th>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($permitDetails as $details) { ?>
                                        <tr>
                                            <td width="20%" align="center"><?php echo $details['quantity'] ?></td>
                                            <td width="20%" align="center"><?php echo $details['unit'] ?></td>
                                            <td width="20%" align="center"><?php echo $details['description'] ?></td>
                                            <td width="20%" align="center"><?php echo $details['cost'] ?></td>
                                        </tr>
                                <?php 
                                    } //END FOREACH LOOP
                                ?>
                            </tbody>
                            </table>
                        </div>
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
