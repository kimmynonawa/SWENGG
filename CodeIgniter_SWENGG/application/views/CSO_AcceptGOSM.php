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
                  <span class="fa fa-user fa-fw"></span> <?php echo ($this->session->userdata('org')[0]['acronym']);?>
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
                <h3>Accept GOSM</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate id="csoneworg" action="accept" method="Post">
                     <span class="section"></span>

						<?php if (isset($success)): ?>
						  <h4>Successfully Added!</h4>
						<?php endif; ?>
			
						<div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-3"> <h4>Current Term</h4> </label>
                            <div class= "form-group col-md-5 ">
								 <label id="actType" name="actType" class="form-control col-md-7 col-xs-12" >
									<?php 
									echo $term[0]['term'];
									echo " ";
									echo $term[0]['schoolyear'];
									?>
								 </label>
                            </div>        
                        </div>
                      </div> 
					  
					  <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-3"> <h4>Current Start Date</h4> </label>
                            <div class= "form-group col-md-5 ">
								 <label id="actType" name="actType" class="form-control col-md-7 col-xs-12" >
								<?php 
									$todate = $term[0]['startdate'];
									$todatenew = strtotime($todate);
									$formatted_todate = date('F d, Y', $todatenew);
									echo $formatted_todate;?>
								 </label>
                            </div>        
                        </div>
                      </div> 
					  
					  <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-3"> <h4>Current End Date</h4> </label>
                            <div class= "form-group col-md-5 ">
								 <label id="actType" name="actType" class="form-control col-md-7 col-xs-12" >

								<?php 
									$todate = $term[0]['enddate'];
									$todatenew = strtotime($todate);
									$formatted_todate = date('F d, Y', $todatenew);
									echo $formatted_todate;?>
									</label>
                            </div>        
                        </div>
                      </div> 
					  
					  <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-3"> <h4>Status</h4> </label>
                            <div class= "form-group col-md-5 ">
								 <label id="actType" name="actType" class="form-control col-md-7 col-xs-12" >
								<?php 
									$todate = $term[0]['enddate'];
									$todatenew = strtotime($todate);
									$formatted_todate = date('Y/m/d', $todatenew);
									if ($formatted_todate < date("Y/m/d") ){
										echo "Ended";
									}
									else{
										echo "On going";
									}
									?>
								 </label>
                            </div>        
                        </div>
                      </div> 
					<br>
					
					
						<div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-3"> <h4>Term</h4> </label>
                            <div class= "form-group col-md-2 ">
                              <select id="term"  name="term" class="form-control col-md-7 col-xs-12">
								<option disabled selected>Term</option>
								<option value="1st Term">1st</option>
								<option value="2nd Term">2nd</option>
								<option value="3rd Term">3rd</option>
							  </select>
                            </div>     
							<div class= "form-group col-md-3 ">
                              <select id="sy"  name="sy" class="form-control col-md-7 col-xs-12">
							   <option disabled selected>School Year</option>
								<option value="2016-2017">2016-2017</option>
								<option value="2017-2018">2017-2018</option>
								<option value="2018-2019">2018-2019</option>
							  </select>
                            </div>  							
                        </div>
                      </div> 
					  
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-3"> <h4>Start Date</h4> </label>
                            <div class= "form-group col-md-5 ">
                              <input type="date" name="startDate" class="form-control">
                            </div>        
                        </div>
                      </div> 
            
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-3"> <h4>End Date</h4> </label>
                            <div class= "form-group col-md-5">
                              <input type="date" name="endDate" class="form-control">
							  
                            </div>        
                        </div>
                      </div> 
                      <br>
                      <div class= "row">
                        <div class="col-md-5">   
                          <label class= "col-md-4">  </label>
                            <div align="center">
                              <input type="submit" name="hi" class="form-control btn-primary" style="width: 190px" value="submit"
							  
							  <?php 
									$todate = $term[0]['enddate'];
									$todatenew = strtotime($todate);
									$formatted_todate = date('Y/m/d', $todatenew);
									if ($formatted_todate < date("Y/m/d") ){
										echo "";
									}
									else{
										echo "disabled";
									}
							?>
							  
							  >
							    
                            </div>        
                        </div>
                      </div> 
                  

                    <!--
                      <div class="ln_solid"></div> 
                      <div align="center" class="form-inline">
                       <button type="button" name="endDate" class="form-control btn-success" style="width: 190px"> Start Accepting GOSM </button>  
                          <button type="button" name="endDate" class="form-control btn-danger" style="width: 190px"> Stop Accepting GOSM </button>
                      </div>
					   -->
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>
  
    
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
