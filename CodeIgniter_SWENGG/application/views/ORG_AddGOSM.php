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
        <div class="col-md-3 left_col ">
          <div class="clearfix"></div>
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section nav side-menu"> 
            <br>      
            <li><a href="#"><i class="fa fa-edit side-menu"></i>Create New GOSM</a></li>
            <li><a href="#"><i class="fa fa-edit side-menu"></i>Pre-Activity Requirements</a></li>
            <li><a href="#"><i class="fa fa-edit side-menu"></i>Additional Requirements</a></li>
            <li><a href="#"><i class="fa fa-edit side-menu"></i>Special Approval Slip</a></li>
            <li><a href="#"><i class="fa fa-folder-open"></i> View Pre-Acts</a></li>
            <li><a href="#"><i class="fa fa-list-alt"></i> View GOSM</a></li>
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
                  <span class="fa fa-user fa-fw"></span> <?php echo ($this->session->userdata('org')[0]['name']);?>La Salle Computer Society
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
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="http://localhost/index.php/account/logout">insert notifs here</a></li>
                </ul>
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
              </li>
            </ul>
          </nav>
        </div>
      </div>

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

                          <p> </p>
                    <span class="section">Nature of Activity</span>
                    <div class= "row">
                      <div class="col-md-8">
					        <label class= "col-md-5"> <h4>Select Activity Office</h4> </label>
                          <div class= "form-group col-md-6">
                            <select id="activityoffice" class="form-control col-md-7 col-xs-12" name="actoff">
                              <option disabled selected>Select Activity Office</option>
              							  <option value="1">CSO and Special Groups</option>
              							  <option value="2">USG</option>
                            </select>
                          </div>
                        <label class= "col-md-5"> <h4>Nature of Activity</h4> </label>
                          <div class= "form-group col-md-6">
                            <select id="natact" class="form-control col-md-7 col-xs-12" name="natact">
                              <option disabled selected>Select Nature of Activity</option>
								 <?php
                					for ($i = 0; $i < count($actnat); $i++){
                						echo"<option value={$actnat[$i]['activitynatureID']}>{$actnat[$i]['activitynature']}</option>";
                					}
                				?> 
                            </select>
                          </div>
                                  
                        </div>
                      </div>  
          
                      <p> </p>
                      <span class="section">Type of Activity</span>
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Type of Activity</h4> </label>
                          <div class= "form-group col-md-6">
                            <select id="processingoffice" class="form-control col-md-7 col-xs-12" name="prooff">
                              <option disabled selected>Processing Office</option>
              								<option value="1">CSO or DAAM</option>
              								<option value="2">SLIFE</option>
                                          
                            </select>
                          </div>
                          <label class= "col-md-5"> <h4>Type of Activity</h4> </label>
                          <div class= "form-group col-md-6">  
                            <select id="typeact"  class="form-control col-md-7 col-xs-12" name="typeact">
                              <option disabled selected>Select Type of Activity</option>
                                 <?php
                					for ($i = 0; $i < count($acttype); $i++){
                						echo"<option value={$acttype[$i]['activitytypeID']}>{$acttype[$i]['activitytype']}</option>";
                					}
                				?> 
                            </select>
                          </div>                
                        </div>
                      </div>  
                      <p> </p>

                          <label><h3>Related to</h3> </label>
                          <div class= "row">
                            <div class="form-group col-md-1 col-sm-2 col-xs-2">
                                   <input type="radio" name="reto" id="reto" class="flat" value="yes"> 
                            </div>Related<br></br>
                            <div class="form-group col-md-1 col-sm-2 col-xs-2">
                                   <input type="radio" name="reto" id="reto" class="flat" value="no"> 
                            </div> Not related
                            </div>

                             <div class="ln_solid"></div> 
                                <div class="form-group">
                                  <div align="right">
                                    <input id="nextbgosm2" type="submit" class="btn btn-success" value="Next" style="width:80px"></button>
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
			
			function removeError(element){
			element.addClass('valid')
					.closest('.form-group')
					.removeClass('has-error');
			}
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
					gosmtodate:{
						required: true
					},
					gosmvenue:{
						required: true
					},
					gosmbug:{
						required: true
					},
					actoff: {
					required:true
					},
					natact: {
						required:true
					},
					prooff: {
						required:true
					},
					typeact: {
						required:true
					},
					reto:{
						required: true
					}
				},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages: {
			gosmtitle:{
				required: 'Enter the title of activity'
			},
			gosmperic:{
				required: 'Enter person in-charge'
			},
			gosmgoals:{
				required: 'Enter the goals of the activity'
			},
			gosmobj: {
				required: 'Enter the objectives of the activity'
			},
			gosmdes:{
				required: 'Enter the description of the activity'
			},
			gosmmeas:{
				required: 'Enter the measures of the activity'
			},
			gosmfromdate: {
				required: 'Pick a start date for the activity'
			},
			gosmtodate: {
				required: 'Pick an end date for the activity'
			},
			gosmvenu: {
				required: 'Enter preferred venue for the activity'
			},
			gosmbug: {
				required: 'Enter budget',
				minlength: 'Minimum amount is 10.00',
				maxlength: 'Maximum amount exceeded'
			},
			actoff: {
					required: 'Pick activity office'
			},
			natact: {
				required: 'Pick nature of activity'
			},
			prooff: {
				required: 'Pick processing office'
			},
			typeact: {
				required: 'Pick type of activity'
			},
			reto: {
				required: 'Pick related to or not'
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