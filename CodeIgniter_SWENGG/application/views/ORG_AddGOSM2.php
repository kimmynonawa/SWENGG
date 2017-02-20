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
                <h3>Fill Out GOSM</h3>
              </div>

              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

				<div class="col-md-12 col-sm-9 col-xs-12">
                <div class="x_panel">
				<form action= "ORG_GOSM3.html" method="submit">
				<div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
					<span class="section">The Central Committee</span>
						<b><label>PROJECT HEADS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Project Head/s Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="projectheads">
							  <tr id ="phdetails" class="phdetails">
								<td>  <input class="form-control" placeholder ="Enter the Name/s of Project Head/s" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add1" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete1" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
						
						<br />
						<br />
						<b><label>YOUNG EXECUTIVES</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Young Executive Head/s Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="youngexecutives">
							  <tr id ="yedetails" class="yedetails">
								<td>  <input class="form-control" placeholder ="Enter the Name/s of Young Executive Head/s" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add2" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete2" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
						
						<br />
						<br />
						<b><label>INTERNAL AFFAIRS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Internal Affairs Head/s Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="internalaffairs">
							  <tr id ="iadetails" class="iadetails">
								<td>  <input class="form-control" placeholder ="Enter the Name/s of Internal Affairs Head/s" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add3" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete3" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
						
						<br />
						<br />
						<b><label>EXTERNAL AFFAIRS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>External Head/s Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="externalaffairs">
							  <tr id ="eadetails" class="eadetails">
								<td>  <input class="form-control" placeholder ="Enter the Name/s of External Affairs Head/s" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add4" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete4" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
						
						<br />
						<br />
						<b><label>HUMAN RESOURCES</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Human Resources Head/s Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="humanresources">
							  <tr id ="hrdetails" class="hrdetails">
								<td>  <input class="form-control" placeholder ="Enter the Name/s of Human Resources Head/s" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add5" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete5" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
						
						<br />
						<br />
						<b><label>PROMOTIONS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Promotions Head/s Name/s:</th>
							  <th>Promotions Head/s Status:</th>
							</tr>
						  </thead>
						  <tbody id="promotions">
							  <tr id ="pdetails" class="pdetails">
								<td>  <input class="form-control" placeholder ="Enter the Name/s of Promotions Head/s" required/></td>
								<td>  <input class="form-control" placeholder ="Enter the Status of Promotions Head/s" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add6" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete6" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
					   
						<br />
						<br />
						<b><label>FINANCE</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Finance Head/s Name/s:</th>
							  <th>Finance Head/s Status:</th>
							</tr>
						  </thead>
						  <tbody id="finance">
							  <tr id ="fdetails" class="fdetails">
								<td>  <input class="form-control" placeholder ="Enter the Name/s of Finance Head/s" required/></td>
								<td>  <input class="form-control" placeholder ="Enter the Status of Finance Head/s" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add7" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete7" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
					   
						<br />
						<br />
						<b><label>DOCUMENTATIONS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Documentations Head/s Name/s:</th>
							  <th>Documentations Head/s Status:</th>
							</tr>
						  </thead>
						  <tbody id="documentations">
							  <tr id ="ddetails" class="ddetails">
								<td>  <input class="form-control" placeholder ="Enter the Name/s of Documentations Head/s" required/></td>
								<td>  <input class="form-control" placeholder ="Enter the Status of Documentations Head/s" required/></td>
							  </tr>
						  </tbody>
						</table>
						<br>
                        <div class = "buttons">
                          <button id="add8" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete8" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
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
            $("#add1").click(function () {
                var det = document.getElementById('phdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('projectheads');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete1").click(function () {
                var count = document.getElementsByClassName("phetails").length;
                var last = document.getElementsByClassName("phdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add2").click(function () {
                var det = document.getElementById('yedetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('youngexecutives');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete2").click(function () {
                var count = document.getElementsByClassName("yedetails").length;
                var last = document.getElementsByClassName("yedetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add3").click(function () {
                var det = document.getElementById('iadetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('internalaffairs');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete3").click(function () {
                var count = document.getElementsByClassName("iadetails").length;
                var last = document.getElementsByClassName("iadetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add4").click(function () {
                var det = document.getElementById('eadetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('externalaffairs');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete4").click(function () {
                var count = document.getElementsByClassName("eadetails").length;
                var last = document.getElementsByClassName("eadetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add5").click(function () {
                var det = document.getElementById('hrdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('humanresources');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete5").click(function () {
                var count = document.getElementsByClassName("hrdetails").length;
                var last = document.getElementsByClassName("hrdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add6").click(function () {
                var det = document.getElementById('pdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('promotions');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete6").click(function () {
                var count = document.getElementsByClassName("pdetails").length;
                var last = document.getElementsByClassName("pdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add7").click(function () {
                var det = document.getElementById('fdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('finance');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete7").click(function () {
                var count = document.getElementsByClassName("fdetails").length;
                var last = document.getElementsByClassName("fdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add8").click(function () {
                var det = document.getElementById('ddetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('documentations');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete8").click(function () {
                var count = document.getElementsByClassName("ddetails").length;
                var last = document.getElementsByClassName("ddetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
    </script>
</html>
