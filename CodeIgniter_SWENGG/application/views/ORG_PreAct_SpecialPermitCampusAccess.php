<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LSCS</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/build/css/custom.min.css" rel="stylesheet">
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
                <img src="images/img.jpg" alt="<?php echo base_url();?>." class="img-circle profile_img">
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
                          Film festivals used to be do-or-die moments for movie makers. They were where<?php echo base_url();?>.
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
                          Film festivals used to be do-or-die moments for movie makers. They were where<?php echo base_url();?>.
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
                          Film festivals used to be do-or-die moments for movie makers. They were where<?php echo base_url();?>.
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
                          Film festivals used to be do-or-die moments for movie makers. They were where<?php echo base_url();?>.
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
  <!-- page content -->
        
          
        <div class="right_col" role="main">
          <div class="">
            <div class= "x_panel">
              <div class= "row">
                <div class="title col-md-5">
                  <h3>Special Permit For Campus Access</h3>
                </div>
                <div align="right">
                  <ul class="nav navbar-right panel_toolbox"> 
                    <li>
                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li> 
                  </ul>
                </div>
              </div>
              <div class= "x_content bg-success">
                <h4><p class="text-success"><p>(1) This form is used ONLY for requesting permission for ACCESS OF PERSONS into the campus.
											<p>(2)	This form will be accepted only within office hours (Mon to Fri: 8:00am to 12:00pm and 1:30pm to 5:00pm)
											<p>(3)	This form must be submitted at the Security Office (J108) no later than two (2) working days before the requested date of campus access. (Saturday is not counted as a working day for this purpose)
											<p>(4)	This form is considered an application only unless a final decision is made and indicated on this form.
											<p>(5)	Clinics in campus are open only from 06:00am to 10:00pm, Mondays to Saturdays.</p>
				</div>
            </div>
                
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                     <form class="form-horizontal form-label-left" novalidate id="spca_form" action="p_forms_controller" method="Post">
				   
						<?php echo validation_errors(); ?>
						
						<?php if (isset($success)): ?>
						<h4>Successfully Added!</h4>
						<?php endif; ?>
						
                      <span class="section">Activity Details</span>
						
                      <div class= "row">
                        <div class="col-md-8">   
                          
							<?php
								require_once('<?php echo base_url();?>/mysql_connect.php');
								$query="SELECT activityID FROM mydb.activity WHERE organization='{$_SESSION['userid']}';";
								$result=mysqli_query($dbc,$query);
							?>
							
							<label class= "col-md-4"> <h4>Activity:</h4> </label>
							<p>
							<div class= "form-group col-md-6">
								<select id="act" name="act" class="col-md-4 col-sm-4 col-xs-9" style="width: 320px;" required>
								<?php
									while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
									{
										$activity=$row['activityID'];
									
										echo '<option value="'.$activity.'">'.$row['title'].'</option>';
									}
								?>
							</select>
							</div>
							</p> 
                        </div>
                      </div> 

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Expected Number of Members to Participate (ENMP):</h4> </label>
                          <div class= "form-group col-md-6">
                            <input type="Number" name="enmp" min="1" id="enmp" class="form-control" placeholder="ex: 80" required/>
                          </div>       
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Expected Number of Participants (ENP):</h4> </label>
                          <div class= "form-group col-md-6">
                            <input type="Number" name="enp" min="1" id="enp" class="form-control" placeholder="ex: 100" required/>
                          </div>       
                        </div>
                      </div>

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Faculty In-Charge:</h4> </label>
                          <div class= "form-group col-md-6">
                              <input type="text" name="faculty" id="faculty" class="form-control" placeholder="ex: Mr. Juan Dela Cruz" required/>
                          </div>        
                        </div>
                      </div>  
						
					<div class= "row">
                        <div class="col-md-8">   
							<label class= "col-md-4"> <h4>Campus Access Type:</h4> </label>
							<p>
							<div class= "form-group col-md-6">
								<select id="type" name="type" class="col-md-4 col-sm-4 col-xs-9" style="width: 320px;" required>
									<option value="default">Select Campus Access Type</option>
									<option value="1">[CA-1] Pre-registration of Visitor (May enter any gate)</option>
									<option value="2">[CA-2] Extended Stay (10:00PM to 01:00AM)</option>
									<option value="3">[CA-3] Overnight (01:00AM to 06:00AM</option>
									<option value="4">[CA-4] Sunday/Holiday (08:00AM to 06:00PM only)</option>
									<option value="5">[CA-5] Exemption from RESTRICTED campus access</option>
							</select>
							</select>
							</div>
							</p> 
                        </div>
                      </div> 
						
						<p>&nbsp;</p>
						<span class="section">Requesting Party Information</span>
					  
					  <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Office/Organization:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name="org" id="org" class="form-control" placeholder="ex: LSCS" required/>
                            </div>        
                        </div>
                      </div> 
					  
					  <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Name/Position:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name="name" id="name" class="form-control" placeholder="ex: Juan Dela Cruz/President" required/>
                            </div>        
                        </div>
                      </div> 

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>ID Number:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "IDnum" id="IDnum" class="form-control" placeholder="ex: 11344444" required/>
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Office Location:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "office" id="office" class="form-control" placeholder="ex: Ayala Avenue Makati City" required/>
                            </div>        
                        </div>
                      </div>

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Cellphone Number:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name="cellphone" id="cellphone" class="form-control" placeholder="ex: 09179999999" required/>
                            </div>        
                        </div>
                      </div>  

                       <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Telephone Number:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name="telephone" id="telephone" class="form-control" placeholder="ex: 6341111" required/>
                            </div>        
                        </div>
                      </div> 

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Email Address:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name="email" id="email" class="form-control" placeholder="ex: juan_delacruz@dlsu.edu.ph" required/>
                            </div>        
                        </div>
                      </div> 
  
                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-11">
                          <input id="nextSpecialPermit1" type="submit" class="btn btn-success align: right" Value="Next" onclick="location.href='ORG_PreAct_SpecialPermitCampusAccess2.php';">
                        </div>
                      </div>    
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src= "js/jquery.validate.min.js"> </script>
    <script src= js/validation.js></script>
    <script src= "http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js" </script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/build/js/custom.min.js"></script>
	
  </body>
</html>
