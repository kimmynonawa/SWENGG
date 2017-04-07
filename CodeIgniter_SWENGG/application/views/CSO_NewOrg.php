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
                <h3>Add New Organization</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate id="csoneworg" action="add" method="Post">
                     <span class="section"></span>

						<?php if (isset($success)): ?>
							<h4>Successfully Added!</h4>
						<?php endif; ?>
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Organization Name</h4> </label>
                            <div class= "form-group col-md-6 ">
                              <input id="orgname" class="form-control has-feedback-left" name="orgname" placeholder="ex: Juan Organization" type="text">
                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>        
                        </div>
                      </div> 
					  
					   <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Organization Acronym</h4> </label>
                            <div class= "form-group col-md-6">
                              <input id="orgacro" class="form-control has-feedback-left" name="orgacro" placeholder="ex: JO" type="text">
                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>        
                        </div>
                      </div> 

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Username</h4> </label>
                            <div class= "form-group col-md-6">
                             <input id="orgun" class="form-control has-feedback-left" name="orgun" type="text" placeholder="ex: juanorg">
                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>        
                        </div>
                      </div>  
                      
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Password</h4> </label>
                            <div class= "form-group col-md-6">
                              <input id="orgpw" class="form-control has-feedback-left" name="orgpw" type="password" placeholder="Must have at least (6) characters">
                              <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                            </div>        
                        </div>
                      </div>  
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Confirm Password</h4> </label>
                            <div class= "form-group col-md-6">
                              <input id="orgcpw" class="form-control has-feedback-left"  name="orgcpw" type="password" placeholder="Re-enter password">
                              <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Email Address</h4> </label>
                            <div class= "form-group col-md-6">
                              <input id="orgemail" class="form-control has-feedback-left" name="orgemail" placeholder="juan_org@dlsu.edu.ph" type="email">
                              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>        
                        </div>
                      </div>  

                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div align="right">
                          <input id="nextbcson" type="submit" class="btn btn-success" value ="Submit" style="width: 80px">
                        </div>
                      </div>
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>
		
		<script src= "<?php echo base_url();?>js/jquery.js"> </script>
		<script src= "<?php echo base_url();?>js/jquery.min.js"></script>
		<script src= "<?php echo base_url();?>js/jquery.validate.min.js"></script>
		
		<script>
			var csoneworg= $('#csoneworg');
			csoneworg.validate({
				rules: {
					orgname:{
						required: true
					},
					orgacro:{
						required: true
					},
					orgun:{
						required: true
					},
					orgpw: {
						required: true,
						minlength: 6
					},
					orgcpw:{
						required: true,
						equalTo: "#orgpw"
					},
					orgemail:{
						email: true,
					}
				},

				messages:{
					orgname:{
						required: 'Enter Name'
					},
					
					orgacro:{
						required: 'Enter Acronym'
					},

					orgun:{
						required: 'Enter username'
					},

					orgpw:{
						minlength: 'Minimum length is 6 characters',
						required: 'Enter password'	
					}, 
					orgcpw:{
						required:' Re-enter password',
						equalTo:  'Passwords do not match'
					},
					orgemail:{
						email: 'Invalid e-mail',
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
