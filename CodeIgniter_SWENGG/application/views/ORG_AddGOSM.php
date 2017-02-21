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
    <link href=" <?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" <?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href=" <?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href=" <?php echo base_url();?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href=" <?php echo base_url();?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href=" <?php echo base_url();?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href=" <?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" <?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
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
                <h3>Fill Out GOSM</h3>
              </div>

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

				<div class="col-md-12 col-sm-9 col-xs-12">
                <div class="x_panel">
				<form action= "ORG_GOSM2.html" method="submit">
				<div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
					<span class="section">General Information</span>
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="reason">Goals: </label>
							<textarea id="goals" name="goals" placeholder="Enter the goals of the organization for the activity" class="col-md-4 col-sm-4 col-xs-9" data-parsley-trigger="keyup" data-parsley-validation-threshold="10"></textarea>
						</div>
						
						<br />
						<br />
						<br />
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="reason">Objectives: </label>
							<textarea id="objectives" name="objectives" placeholder="Enter the objectives of the organization for the activity" class="col-md-4 col-sm-4 col-xs-9" data-parsley-trigger="keyup" data-parsley-validation-threshold="10"></textarea>
						</div>
						
						<br />
						<br />
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="reason">Brief Description: </label>
							<textarea id="description" required="required" name="description" placeholder="Enter the brief description of the activity"class="col-md-4 col-sm-4 col-xs-9" data-parsley-trigger="keyup" data-parsley-validation-threshold="10"></textarea>
						</div>
						
						<br />
						<br />
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="submittedby">Measures: </label>
							<input type="text" id="measures" class="col-md-4 col-sm-4 col-xs-9" placeholder="Enter the measures of the activity" name="measures" required />
						</div>
						
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="targetdate">GOSM Target Date: </label>
							<p style="padding: 5px;" class="col-md-4 col-sm-4 col-xs-9">
							<input type="radio" name="targetdate" id="td1" value="Venue" required class="flat"/> Year Long
							<br />

							<input type="radio" name="targetdate" id="td2" value="dateandtime" class="flat"/> Term Long
							<br />

							<input type="radio" name="targetdate" id="td4" value="cancellation" class="flat" /> Days
							<br />
							</p>
								
						</div>
						
						<br />
						<br />
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-1 col-sm-1 col-xs-12 col-md-offset-2" for="fromdate"> Start Date: </label>
							<input type="date" id="fromdate" class="col-md-2 col-sm-2 col-xs-9" placeholder="Enter the start date of the activity" name="fromdate" required />
						</div>
						
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-1 col-sm-1 col-xs-12 col-md-offset-2" for="todate">End Date: </label>
							<input type="date" id="todate" class="col-md-2 col-sm-2 col-xs-9" placeholder="Enter the end date of the activity" name="todate" required />
						</div>
						
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="time">Time: </label>
							<input type="time" id="time" class="col-md-4 col-sm-4 col-xs-9" placeholder="Enter the time of the activity" name="time" required />
						</div>
						
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="submittedby">Venue: </label>
							<input type="text" id="venue" class="col-md-4 col-sm-4 col-xs-9" placeholder="Enter the venue of the activity" name="venue" required />
						</div>
						
						<br />
						<br />
						<b>Nature of Activity</b>
						<br />
						<br />
						<div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="csoandspecialgroups">CSO and Special Groups: </label>
							<select id="csoandspecialgroups" required class="col-md-4 col-sm-4 col-xs-9">
								<option value="default">Select Nature Of Activity</option>
								<option value="academic">Academic</option>
								<option value="specialinterest">Special Interest</option>
								<option value="departmentalinitiative">Departmental Initiative</option>
								<option value="fundraising">Fundraising</option>
								<option value="communitydevelopment">Community Development</option>
								<option value="organizationdevelopment">Organization Development</option>
								<option value="issueadvocacy">Issue Advocacy</option>
								<option value="LFSG">Lasallian Formation/Spiritual Growth</option>
								<option value="outreach">Outreach</option>
							</select>
						</div>
						
						<br />
						<br />
						<div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="usg">USG: </label>
							<select id="usg" required class="col-md-4 col-sm-4 col-xs-9">
								<option value="default">Select Nature Of Activity</option>
								<option value="studentservice">Student Service</option>
								<option value="SRW">Student's Rights and Welfare</option>
								<option value="rulesandpolicies">Rules and Policies</option>
								<option value="fundraising">Fundraising</option>
								<option value="communitydevelopment">Community Development</option>
								<option value="organizationdevelopment">Organization Development</option>
								<option value="issueadvocacy">Issue Advocacy</option>
								<option value="LFSG">Lasallian Formation/Spiritual Growth</option>
								<option value="outreach">Outreach</option>
							</select>
						</div>
						
						<br />
						<br />
						<b>Type of Activity</b>
						<br />
						<br />
						<div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="throughcsodaam">Through CSO / DAAM: </label>
							<select id="throughcsodaam" required class="col-md-4 col-sm-4 col-xs-9">
								<option value="default">Select Type Of Activity</option>
								<option value="academic">Academic Contest</option>
								<option value="material">Distribution</option>
								<option value="equipment">General Assembly</option>
								<option value="material">Seminar/Workshops</option>
								<option value="equipment">Publicity/Awareness Campaign</option>
								<option value="material">Meetings</option>
								<option value="equipment">Spiritual Activity</option>
								<option value="material">Recruitment/Audition</option>
								<option value="equipment">Recreation</option>
							</select>
						</div>
						
						<br />
						<br />
						<div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="throughslife">Through Slife: </label>
							<select id="throughslife" required class="col-md-4 col-sm-4 col-xs-9">
								<option value="default">Select Type Of Activity</option>
								<option value="academic">Alliance with Outside Organizations</option>
								<option value="material">Off-Campus Activities</option>
								<option value="equipment">Seminar with Distinguished Speakers</option>
								<option value="material">Conference Involving Outside Participants</option>
								<option value="equipment">Solicitations</option>
								<option value="material">Fundraising</option>
								<option value="equipment">Donation Drive</option>
							</select>
						</div>
						
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="submittedby">Related to: </label
							<div class="item form-group">
								<label class="control-label col-md-1 col-sm-1 col-xs-12" for="r">R: </label>
								<input type="number" id="r" class="col-md-1 col-sm-1 col-xs-9" name="r" required />
							</div>
							<br />
							<div class="item form-group">
								<label class="control-label col-md-1 col-sm-1 col-xs-12 col-md-offset-2" for="n">N: </label>
								<input type="number" id="n" class="col-md-1 col-sm-1 col-xs-9" name="n" required />
							</div>
						</div>
						
						<br />
						<br />
						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="budget">Budget: </label>
							<input type="number" id="budget" class="col-md-4 col-sm-4 col-xs-9" placeholder="Enter the breakdown of expenses of the activity" name="budget" required />
						</div>
						
						<br />
						<br />
						<br />
						<br />
						<div class="form-group">
						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-11">
						  <button type="submit" class="btn btn-success" id="submit">NEXT</button>
						</div>
						</div>
						<br />
						<br />
      
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
