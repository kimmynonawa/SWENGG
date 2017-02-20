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
                <h3>Special Permit for Campus Access</h3>
              </div>

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-9 col-xs-12">
                <div class="x_panel">
				<form action= "ORG_PreAct_SpecialPermitCampusAccess3.html" method="submit">
				<div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
						<span class="section">Request Details</span>
						<div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="activity">Activity: </label>
							<select id="activity" required class="col-md-4 col-sm-4 col-xs-9">
                            <option value="">Select Activity</option>
                            <option value="officertraining">Officer Training</option>
                            <option value="generalassembly">General Assembly</option>
                            <option value="medicalmission">Medical Mission</option>
							</select>
						</div>
						
						<br />
						<br />
						<br />
						<b><label>REQUESTS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Start Date:</th>
							  <th>Start Time:</th>
							  <th>End Date:</th>
							  <th>End Time:</th>
							  <th>Venue</th>
							</tr>
						  </thead>
						  <tbody id="requests">
							  <tr id ="details" class="details">
								<td>  <input class="form-control" placeholder ="Enter Start Date" required/></td>
								<td>  <input class="form-control" placeholder ="Enter Start Time" required/></td>
								<td>  <input class="form-control" placeholder ="Enter End Date" required/></td>
								<td>  <input class="form-control" placeholder ="Enter End Time" required/></td>
								<td>  <input class="form-control" placeholder ="Enter Venue" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
					
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="TENP">Total Expected Number of Participants: </label>
							<input type="number" id="TENP" class="col-md-4 col-sm-4 col-xs-9" name="TENP" placeholder="Enter Total Expected Number of Participants" required />
						</div>
						
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="TENMP">Total Expected Number of Members to Participate: </label>
							<input type="number" id="TENP" class="col-md-4 col-sm-4 col-xs-9" name="TENMP" placeholder="Enter Total Expected Number of Members to Participate" required />
						</div>
						
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="outsiders">With Outsiders?: </label>
							<p style="padding: 5px;" class="col-md-4 col-sm-4 col-xs-9">
							<input type="radio" name="outsiders" id="yes" value="yes" required class="flat"/> Yes
							<br />

							<input type="radio" name="outsiders" id="no" value="no" class="flat"/> No
							<br />		
							</p>
						</div>
						
						<br />
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="faculty">Faculty In-Charge: </label>
							<input type="text" id="faculty" class="col-md-4 col-sm-4 col-xs-9" name="faculty" placeholder="Enter Name of Faculty In-Charge" required />
						</div>
					
						<br />
						<br />
						<div class="form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="typeofcampusaccess">Type of Campus Access: </label>
								<select id="typeofcampusaccess" required class="col-md-4 col-sm-4 col-xs-9">
								<option value="default">Select Type of Campus Access</option>
								<option value="ca1">[CA-1]Pre-registration of Visitor1/(May enter any gate)</option>
								<option value="ca2">[CA-2]Extended Stay 2/(10:00pmto 01:00am)</option>
								<option value="ca3">[CA-3]Overnight2/(01:00am to 06:00am)</option>
								<option value="ca4">[CA-4]Sunday / Holiday2/(08:00am to 06:00pmonly)</option>
								<option value="ca5">[CA-5]Exemption from RESTRICTED campus access2</option>
							</select>
						</div>
						
						<button type="submit" class="btn btn-success col-md-offset-11" id="submit">NEXT</button>
				</form>
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
	<script>
        $(document).ready(function () {
            $("#add").click(function () {
                var det = document.getElementById('details'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('requests');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete").click(function () {
                var count = document.getElementsByClassName("details").length;
                var last = document.getElementsByClassName("details").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
    </script>
</html>