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

     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Organization Chart Details</h3>
              </div>

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
					<form action= "ORG_Home.html" method="submit">
						<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
						  <div class="x_title">
							<h2>Activity Information</h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							<span class="section">Information</span>
								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Activity Name: </label>
									<p>Leadership Seminar</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Goals: </label>
									<p>To hone the officers' and Young Officers' skills in terms of leadership and public speaking</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Brief Description: </label>
									<p>This is a leadership training for all the Young Officers and Officers of YES. This workshop</p>
								</div>
								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
									<p>aims to give YES' Officers insights on public speaking and leadership skills so that they can</p> 
								</div>
								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12"></label> 
									<p>apply it to their daily lives as an officer and as a person as well.</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Measures: </label>
									<p>Attendance</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">GOSM Target Date: </label>
									<p>November 04, 2016</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Time: </label>
									<p>9:00am-11am</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Venue: </label>
									<p>Y507</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Activity Nature: </label>
									<p>Academic</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Activity Type: </label>
									<p>Seminar/Workshops</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Related to: </label>
									<p>R - 1</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-2 col-sm-2 col-xs-12">Budget Breakdown: </label>
									<p>P1000.00</p>
								</div>
								<br />
								<br />
							
							<span class="section">The Central Committee</span>
								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Project Head/s: </label>
									<p>Aldrich Opiniano (VP Human Resources), and Allene Quintana (AVP Training and Development)</p>
								</div>
								
								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Young Executives: </label>
									<p>"Young Executives"</p>
								</div>
								
								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Internal Affairs Head/s: </label>
									<p>"Internal Affairs"</p>
								</div>
								
								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">External Affairs  Head/s: </label>
									<p>"External Affairs"</p> 
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Human Resources Head/s: </label> 
									<p>"Human Resources"</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Communications Head/s: </label>
									<p>"Communications"</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Promotions Head/s: </label>
									<p>"Promotions"</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Finance Head/s: </label>
									<p>Ryan King</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Documentations Head/s: </label>
									<p>Alex Espiritu</p>
								</div>
								<br />
								<br />
								
							<span class="section">Others</span>
								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Photographers: </label>
									<p>"Photographers"</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Videographers: </label>
									<p>"Videographers"</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Host/s: </label>
									<p>"Hosts"</p> 
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Speaker/s: </label> 
									<p>"Speakers"</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Sponsor/s: </label>
									<p>"Sponsors"</p>
								</div>

								<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Equipment Needed: </label>
									<p>"Equipments"</p>
								</div>
								<br />
								<br />
						  </div>
						</div>
					  </div>
								
						
						<button type="submit" class="btn btn-success col-md-offset-11" id="submit">NEXT</button>
      
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
