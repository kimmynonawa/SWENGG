<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo ($this->session->userdata('org')[0]['acronym']);?></title>
	
	<script src= "<?php echo base_url();?>js/jquery.js"> </script>
	<script src= "<?php echo base_url();?>js/jquery.min.js"></script>
	<script src= "<?php echo base_url();?>js/jquery.validate.min.js"></script>

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
                    <li><a href="http://localhost/index.php/account/login"><i class="fa fa-sign-out"></i> Log Out</a></li>
                  </ul>
                </li>
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
                  <h3>Activity Approval Form</h3>
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
                <h4><p class="text-success"> Lorem ipsum dolor sit amet, vel pretium architecto, semper semper eu elit sed, lacus cras quis, pede velit. Pretium convallis suscipit, vestibulum rutrum, eu integer montes erat ut tincidunt, facilisis dolor. Et fermentum nulla, litora leo in, nunc aliquam aperiam, rutrum elementum, dictum malesuada morbi amet nisl. sociis odio laoreet dolor mauris. </p></h4>
              </div>
            </div>
                
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form id="aform1" autocomplete="off" action="aformGOSM" method="post">
                      <span class="section">General Information</span>
                     
                      <div class= "row">
                        <div class="col-md-8">
                          <label class= "col-md-5"> <h4>Title Of Activity:</h4> </label>
                          <div class= "form-group col-md-6">
                              <select name= "actName" class="form-control"/>
                                <option disabled selected>Select Activity</option>
									<?php
										for ($i = 0; $i < count($activity); $i++){
											echo"<option value={$activity[$i]['activityID']}>{$activity[$i]['title']}</option>";
										}
									?>
                              </select>
                          </div>        
                        </div>
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
                                       
                            </select>
                          </div>                
                        </div>
                      </div>  
                      <p> </p>
                      <span class="section">Reach of Activity</span>
                      <div class= "row">
                        <div class="col-md-8">   
                        <label class= "col-md-5"> <h4>Reach of Activity</h4> </label>
                          <div class= "form-group col-md-6">
                            <select id="reachType"  name="reachType" class="form-control col-md-7 col-xs-12">
                              <option disabled selected>Select Reach Of Activity</option>
								<?php
									for ($i = 0; $i < count($reach); $i++){
										echo"<option value={$reach[$i]['idREF_ACTIVITYREACH']}>{$reach[$i]['activityreach']}</option>";
									}
								?>        
                            </select>
                          </div>      
                        </div>
                      </div> 

                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-11">
                          <input id="nextaform" type="submit" class="btn btn-success align: right" Value="Next">
                        </div>
                      </div>    
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>

    
	<script>
		$('#activityoffice').on('change',function(){
			var actoff = $('#activityoffice').val();
			$.ajax({
			url: "getActivityNature",
			method: "POST",
			data:{
				'actoff':actoff
			},
			success: function(data){
				console.log(1)
				$('#natact').empty ();
				$('#natact').append('<option disabled selected>Select Nature of Activity</option>');
				for (i = 0; i < data.length; i++){
					$('#natact').append('<option value="'+ data[i].idREF_ACTIVITYNATURE +'">'+ data[i].activitynature +'</option>');
				}
				}
			});
		});
		
		$('#processingoffice').on('change',function(){
			var prooff = $('#processingoffice').val();
			$.ajax({
			url: "getActivityType",
			method: "POST",
			data:{
				'prooff':prooff
			},
			success: function(data){
				console.log(1)
				$('#typeact').empty ();
				$('#typeact').append('<option disabled selected>Select Type of Activity</option>');
				for (i = 0; i < data.length; i++){
					$('#typeact').append('<option value="'+ data[i].idREF_ACTIVITYTYPE +'">'+ data[i].activitytype+'</option>');
				}
				}
			});
		});
	</script>
	<script>
		var aform1= $('#aform1');
		function removeError(element){
			element.addClass('valid')
					.closest('.form-group')
					.removeClass('has-error');
			}
		aform1.validate({
			rules: {
				actName: {
					required:true
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
				reachType: {
					required:true
				}
			},
			highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
			},
			success: removeError,

			messages:{
				actName: {
					required: 'Enter activity name'
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
				reachType: {
					required: 'Pick reach of activity'
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
