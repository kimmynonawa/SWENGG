<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src= "<?php echo base_url();?>js/jquery.js"> </script>
	<script src= "<?php echo base_url();?>js/jquery.min.js"></script>
	<script src= "<?php echo base_url();?>js/jquery.validate.min.js"></script>

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
                    <li><a href="http://localhost/index.php/account/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                  </ul>
                </li>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_content">
						<form class="form-horizontal form-label-left" id= "gosm" action="add" method="post">
				
                              <div class="row" id="gi" >
                               <span class="section">General Information</span>
                              </div>
							  
								<?php echo validation_errors(); ?>
						
								<?php if (isset($success)): ?>
									<h4>Successfully Added!</h4>
								<?php endif; ?>
								
                            <div class= "row">
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group">
                                <label> <h3> Title </h3> </label>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 form-group">
                                 <input type="text" name="gosmtitle" class="form-control" id="gosmtit">
                              </div>
                            </div>

                              <div class= "row">
                                <div class="col-md-2 col-sm-2  form-group">
                                  <label> <h3> Goals</h3> </label>
                                </div>
                                <div class="col-md-4 col-sm-4  form-group">
                                  <textarea name="gosmgoals" rows="4" class="form-control"></textarea> 
                                </div>
                              </div>

                              <div class= "row">
                                <div class="col-md-2 col-sm-2 form-group">
                                  <label> <h3> Objectives</h3> </label>
                                </div>
                                <div class="col-md-4 col-sm-4 form-group">
                                  <textarea name="gosmobj" rows="4" class="form-control"></textarea> 
                                </div>
                              </div>

                              <div class= "row">
                                <div class="col-md-2 col-sm-2 form-group">
                                  <label> <h3> Description</h3> </label>
                                </div>
                                <div class="col-md-4 col-sm-4  form-group">
                                  <textarea name="gosmdes" rows="4" class="form-control"></textarea> 
                              </div>
                            </div>

                             <div class= "row">
                                <div class="col-md-2 col-sm-2 col-xs-2 form-group">
                                  <label> <h3> Measures</h3> </label>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 form-group">
                                  <input type="text" name="gosmmeas" class="form-control" id="gosmmeas">
                              </div>
                            </div>

                          <div class="ln_solid"></div> 

                            <div class="row" id="sd" >
                             <span class="section">Specific Details</span>
                            </div>

                            <div class= "row">
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group">
                                <label> <h3> Person In-Charge </h3> </label>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 form-group">
                                 <input type="text" name="gosmperic" class="form-control" id="gosmpic">
                              </div>
                            </div>


                            <div class= "row">
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group">
                                <label> <h3> Date</h3> </label>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group">
                                 <input type="date" name="gosmfromdate" class="form-control" id="gosmsdate">
                              </div>

                              <div class="col-md-2 col-sm-2 col-xs-2 form-group">
                                 <input type="date" name="gosmtodate" class="form-control" id="gosmedate">
                              </div>
                            </div>

                            <div class= "row">
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group">
                                <label> <h3> Venue </h3> </label>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 form-group">
                                 <input type="text" name="gosmvenue" class="form-control" id="gosmvenu" placeholder="e.g. Y605">
                              </div>
                            </div>

                            <div class= "row">
                              <div class="col-md-2 col-sm-2 col-xs-2 form-group">
                                <label> <h3> Budget </h3> </label>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 form-group">
                                 <input type="text" name="gosmbug" class="form-control" id="gosmbug" placeholder="Budget">
                              </div>
                            </div>

                          <div class="ln_solid"></div> 
                          <div class="row" id="gi" >
                             <span class="section">Activity Details</span>
                          </div>

                          <label> <h3>CSO and  Special Groups</h3> </label>
                          <div class= "row">
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                  <select name="gosmnat" class="form-control" id="gosmnat">
										
										<!--Select Activity Nature where Activity office is CSO and SPECIAL GROUPS-->
									   <option disabled selected>Select Nature of Activity</option>
                                      <?php
										for ($i=0; $i<count($activityNature1);$i++){
											echo"<option value={$activityNature1[$i][idREF_ACTIVITYNATURE]}>{$activityNature1[$i][activitynature]}</option>";
										}
									  ?>
                                  </select>
                                  <p></p>
                                  <select name="gosmnatt" class="form-control" id="gosmnat">
                                      <option disabled selected>Select Nature of Activity</option>
									  <?php
										for ($i=0; $i<count($activityNature2);$i++){
											echo"<option value={$activityNature2[$i][idREF_ACTIVITYNATURE]}>{$activityNature2[$i][activitynature]}</option>";
										}
									  ?>
                                  </select>
                            </div>
                           </div>

                        <label> <h3> Type of Activity</h3> </label>
                        <div class= "row">
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                  <select name="gosmtype" class="form-control" id="gosmtype">
									  <option disabled selected>Select Type of Activity</option>
                                      <?php
										for ($i=0; $i<count($activityType1);$i++){
											echo"<option value={$activityType1[$i][idREF_ACTIVITYTYPE]}>{$activityType1[$i][activitytype]}</option>";
										}
									  ?>
                                  </select>
                                  <p></p>
                                  <select name="gosmtypee" class="form-control" id="gosmtype">
                                      <option disabled selected>Select Type of Activity</option>
                                      <?php
										for ($i=0; $i<count($activityType2);$i++){
											echo"<option value={$activityType2[$i][idREF_ACTIVITYTYPE]}>{$activityType2[$i][activitytype]}</option>";
										}
									  ?>
                                  </select>
                               </div>
                           </div>

                          <label><h3>Related to</h3> </label>
                          <div class= "row">
                            <div class="form-group col-md-1 col-sm-2 col-xs-2">
                                   <input type="radio" name="reto" id="reto" class="flat" value="yes"> Related
                            </div>
                            <div class="form-group col-md-1 col-sm-2 col-xs-2">
                                   <input type="radio" name="reto" id="reto" class="flat" value="no"> Not related
                            </div> 
                            </div>

                             <div class="ln_solid"></div> 
                                <div class="form-group">
                                  <div class="col-md-12 col-md-offset-11">
                                    <input id="nextbgosm2" type="submit" class="btn btn-success align: right" value="Next"></button>
                                  </div>
                                </div>

                          </form> 
                          </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- /page content -->
		
		<script>
			var gosmnew= $('#gosm');
			gosmnew.validate({
				rules: {
					gosmtitle:{
						required: true
					},
					gosmgoals:{
						required: true
					},
					gosmobj:{
						required: true
					},
					gosmdes:{
						required: true
					},
					gosmmeas:{
						required: true
					},
					gosmperic:{
						required: true
					},
					gosmfromdate:{
						required: true
					},
					gosmvenue:{
						required: true
					},
					gosmbug:{
						required: true
					},
					gosmnat:{
						required: true
					},
					gosmtype:{
						required: true
					},
					reto:{
						required: true
					}
				}
			});
		
		</script>
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