<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LSCS</title>

    <script src= "<?php echo base_url();?>js/jquery.js"> </script>
	<script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src= "<?php echo base_url();?>js/jquery.validate.min.js"> </script>
	

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

        <div class="right_col" role="main">
          <div class="">
            <div class= "x_panel">
              <div class= "row">
                <div class="title col-md-5">
                  <h3>Minor Publication Proposal</h3>
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

                    <form class="form-horizontal form-label-left" id="p_forms_controller" action="minorpub_form" method="Post">
						<span class="section">General Information</span>
						
						<?php if (isset($success)): ?>
							<h4>Successfully Added!</h4>
						<?php endif; ?>
						
						<?php echo validation_errors(); ?>

                      <div class= "row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label class= "col-md-2"> <h4>Publication Name:</h4> </label>
                                <div class= "form-group col-md-10">            
                                   <p><input type="text" class="form-control has-feedback-left" id="pubname" name="pubname" placeholder="  Name of Publication" required/></p>  
                                  <span class="fa fa-file form-control-feedback left" aria-hidden="true"></span>
                                </div>   
                        </div>    
                      </div>
                      
                      <div class="row">
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                              <label class= "col-md-2"> <h4>Publication Type:</h4> </label>
                                <div class= "form-group col-md-10">            
                                    <p><input type="text" class="form-control has-feedback-left" id="pubname" name="pubtype" placeholder="  Type of Publication" required/></p>  
                                </div>      
                            </div>
                         </div>  
						 
						  <div class="row">
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                              <label class= "col-md-2"> <h4>Frequency of Publication:</h4> </label>
                                 <div class= "form-group col-md-10">            
                                    <p> <input type="Number" class="form-control" id="pubfreq" name="pubfreq" placeholder="Frequency of Publication (Days)" required/></p> 
                                </div>  
                            </div>
                         </div>  
						 
						  <div class="row">
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                              <label class= "col-md-2"> <h4>Estimated Cost:</h4> </label>
                                 <div class= "form-group col-md-10">            
                                    <p> <input type="Number" class="form-control" id="pubcost" name="pubcost" placeholder="Estimated Cost" required/>  </p> 
                                </div>  
                            </div>
                         </div> 

                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">   
                                <label class= "col-md-2"> <h4>Target Date:</h4> </label>
                                <div class= "form-group col-md-10">
                                    <input type="date" name= "tdate" class="form-control" id="tdate" required/>
                                </div>        
                        </div>
                      </div> <!-- row -->
                      
                      <div class="ln_solid"></div> 
                      
                       <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">      
                               
                                <label class= "col-md-2"> <h4> Objectives</h4> </label>
                                <div class="form-group col-md-10 col-sm-10 col-xs-10">
                                  <input type="text" class="form-control" id="obj1" name="obj1" placeholder="1st Objective" required/>
                                  <p></p>
                                  <input type="text" class="form-control" id="obj2" name="obj2" placeholder="2nd Objective" required/>
                                  <p></p>
                                  <input type="text" class="form-control" id="obj3" name="obj3" placeholder="3rd Objective" required/>
                                </div>      
                        </div>
                      </div> <!-- row -->

                      <div class="ln_solid"></div> 
                      
                       <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">        
                           <label class= "col-md-2"> <h4> Proposed Content</h4> </label>
                                <div class="form-group col-md-10 col-sm-10 col-xs-10">
                                  <input type="text" class="form-control" id="cont1" name="cont1" placeholder="Publication Content" required/>
                                  <p></p>
                                  <input type="text" class="form-control" id="cont2" name="cont2" placeholder="Publication Content" required/>
                                  <p></p>
                                  <input type="text" class="form-control" id="cont3" name="cont3" placeholder="Publication Content" required/>
                                </div>      
                          </div>
                        </div> <!-- row -->

                        <div class="ln_solid"></div> 

                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">                           
                                <label class= "col-md-2"> <h4> Target Readers</h4> </label>
                                <div class="form-group col-md-10 col-sm-10 col-xs-10">
                                  <input type="text" class="form-control" id="tread1" name="tread1" placeholder="Target Audience" required/>
                                  <p></p>
                                  <input type="text" class="form-control" id="tread2" name="tread2" placeholder="Target Audience" required/>
                                  <p></p>
                                  <input type="text" class="form-control" id="tread3" name="tread3" placeholder="Target Audience" required/>
                                </div>      
                         </div>

                        <div class="form-group">
                          <div class="col-md-12 col-md-offset-11">
                            <input type="submit" class="btn btn-success align: right" value ="Next">
                          </div>
                        </div>

                       </form>            
                         
                      </div> <!-- row -->
                        </div> 
                      </div>
                  </div>
                </div> 
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

	<script>
	
	function removeError(element)
	{
		element.addClass('valid')
						.closest('.form-group')
						.removeClass('has-error');
	}
	
	var pubform= $('#pubform');
	pubform.validate({
		rules: {
			pubname: "required",
			
			pubtype: "required",
			
			pubfreq: {
				required: true,
				number: true,
				minlength: 1

			},

			pubcost:{
				required: true,
				number: true,
				minlength:1
			},

			tdate: "required",

			obj1: "required",

			obj2: "required",

			obj3: "required",

			cont1: "required",

			cont2: "required",
			
			cont3: "required",

			tread1: "required",

			tread2: "required",

			tread3: "required"

			},

		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			pubname: {
				required: 'Enter publication name'
			},

			pubtype:{
				required: 'Enter publication type'
			},

			pubfreq: {
				required:'Enter frequency of publication',
				number:  'Invalid frequency',
				minlength: 'Invalid frequency'
			},

			pubcost:{
				required: 'Pick estimated publication cost',
				number: 'Invalid cost'
			},

			tdate:{
				required: 'Pick publication date'
			},

			obj1: {
				required: 'Enter objective'
			},

			obj2: {
				required: 'Enter objective'
			},

			obj3: {
				required: 'Enter objective'
			},

			cont1: {
				required: 'Enter publication content'
			},

			cont2: {
				required: 'Enter publication content'
			},

			cont3: {
				required: 'Enter publication content'
			},

			tread1: {
				required: 'Enter reader of the publication'
			},

			tread2: {
				required: 'Enter reader of the publication'
			},

			tread3: {
				required: 'Enter reader of the publication'
			},

		}

		});
	
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
