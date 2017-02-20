<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LSCS</title>
	<link rel="stylesheet" href="css/screen.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/signup-form.js"></script>

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
				<form action= "ORG_GOSM.html" method="submit" for="submit1">
				<form action= "ORG_Home.html" method="submit" for="submit2">
				<div class="x_content">

                    <!-- start form for validation -->
                    <form id="gosm3" data-parsley-validate>
					<span class="section">Others</span>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Photographer Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="photographers">
							  <tr id ="pdetails" class="pdetails">
								<td>  <input class="form-control" name="photographers" id="photographers" placeholder ="Enter the Name/s of Photographer/s" /></td>
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
						<b><label>Videographers</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Videographer/s Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="videographers">
							  <tr id ="vdetails" class="vdetails">
								<td>  <input class="form-control" name="videographers" id="videographers" placeholder ="Enter the Name/s of Videographer/s" /></td>
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
						<b><label>HOSTS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Host/s Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="hosts">
							  <tr id ="hdetails" class="hdetails">
								<td>  <input class="form-control" name="hosts" id="hosts" placeholder ="Enter the Name/s of Host/s" /></td>
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
						<b><label>SPEAKERS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Speaker/s Name/s:</th>
							  <th>Contact Number:</th>
							  <th>Email Address:</th>
							</tr>
						  </thead>
						  <tbody id="speakers">
							  <tr id ="sdetails" class="sdetails">
								<td>  <input class="form-control" name="speakersn" id="speakersn" placeholder ="Enter the Name/s of Speaker/s" /></td>
								<td>  <input class="form-control" name="speakersc" id="speakersc" placeholder ="Enter the Contact No of Speaker/s" /></td>
								<td>  <input class="form-control" name="speakerse" id="speakerse" placeholder ="Enter the Email Address of Speaker/s" /></td>
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
						<b><label>SPONSORS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Sponsor/s Name/s:</th>
							  <th>Contact Number:</th>
							  <th>Email Address:</th>
							</tr>
						  </thead>
						  <tbody id="sponsors">
							  <tr id ="spdetails" class="spdetails">
								<td>  <input class="form-control" name="sponsorsn" id="sponsorsn" placeholder ="Enter the Name/s of Sponsor/s" /></td>
								<td>  <input class="form-control" name="sponsorsc" id="sponsorsc" placeholder ="Enter the Contact No of Speaker/s" /></td>
								<td>  <input class="form-control" name="sponsorse" id="sponsorse" placeholder ="Enter the Email Address of Speaker/s" /></td>
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
						<b><label>EQUIPMENTS</label></b>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Equipment Name/s:</th>
							</tr>
						  </thead>
						  <tbody id="equipements">
							  <tr id ="edetails" class="edetails">
								<td>  <input class="form-control" name="equipments" id="equipments" placeholder ="Enter the Equipment Name/s" /></td>
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
						<br />
						<br />
                        <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-8">
						  <button type="submit" class="btn btn-success" name="submit1" id="submit1">ADD ANOTHER ACTIVITY!</button>
						  <button type="submit" class="btn btn-success" name="submit2" id="submit2">FINISH</button>
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
		$('#gosm3').validate({
		rules: {
			photographers:"required",

			videographers: "required",

			hosts:"required",

			speakersn: "required",
			
			speakersc: "required",
			
			speakerse: "required",

			sponsorsn:  "required",
			
			sponsorsc:  "required",
			
			sponsorse:  "required",

			equipments:  "required",
		},

		messages: {
			photographers: {
				required: 'Enter enter photographer/s name/s.'
			},

			videographers:{
				required: 'Enter enter videographer/s name/s'
			},

			hosts:{
				required: 'Enter enter host/s name/s.'
			},


			speakersn:{
				required: 'Enter enter the name of speaker.'
			},

			speakersc: {
				required: 'Please enter the contact number of speaker.'
			},

			speakerse: {
				required: 'Please enter the email address of speaker.'
			},
			
			sponsorsn:{
				required: 'Enter enter the name of sponsor.'
			},

			sponsorsc: {
				required: 'Please enter the contact number of sponsor.'
			},

			sponsorse: {
				required: 'Please enter the email address of sponsor.'
			},

			equipments: {
				required: 'Please enter equipment name.'
			},

		}
		})
		}
		$(document).ready(function () {
            $("#add1").click(function () {
                var det = document.getElementById('pdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('photographers');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete1").click(function () {
                var count = document.getElementsByClassName("pdetails").length;
                var last = document.getElementsByClassName("pdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add2").click(function () {
                var det = document.getElementById('vdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('videographers');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete2").click(function () {
                var count = document.getElementsByClassName("vdetails").length;
                var last = document.getElementsByClassName("vdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add3").click(function () {
                var det = document.getElementById('hdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('hosts');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete3").click(function () {
                var count = document.getElementsByClassName("hdetails").length;
                var last = document.getElementsByClassName("hdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add4").click(function () {
                var det = document.getElementById('sdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('speakers');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete4").click(function () {
                var count = document.getElementsByClassName("sdetails").length;
                var last = document.getElementsByClassName("sdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add5").click(function () {
                var det = document.getElementById('spdetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('sponsors');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete5").click(function () {
                var count = document.getElementsByClassName("spdetails").length;
                var last = document.getElementsByClassName("spdetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		$(document).ready(function () {
            $("#add6").click(function () {
                var det = document.getElementById('edetails'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('equipements');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete6").click(function () {
                var count = document.getElementsByClassName("edetails").length;
                var last = document.getElementsByClassName("edetails").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })
        })
		
		
	</script>
</html>
