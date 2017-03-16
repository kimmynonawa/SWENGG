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

                    <form class="form-horizontal form-label-left" id="p_forms_controller" action="minorpub_form2" method="Post">
                      <div class="row">
                          <span class="section">Publication Specifications</span>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group col-md-4 col-sm-6 col-xs-12"> 
                                   <p> <input type="Number" name= "npages" class="form-control" id="nump" placeholder="Number of Pages"/></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-8 col-sm-6 col-xs-12"> 
                                    <input type="text" name="bm1" class="form-control" id="nbmember" placeholder="Board member-In-Charge"/>
                                </div>         
                          </div>
                        </div> <!-- row -->
                    

                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group col-md-4 col-sm-6 col-xs-12"> 
                                   <p> <input type="Number" name="ssize" class="form-control" id="spreadsize" placeholder="Spread Size"/></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-8 col-sm-6 col-xs-12"> 
                                    <input type="text" name="bm2" class="form-control" id="spbmember" placeholder="Board member-In-Charge"/>
                                </div>     
                        </div>
                      
                      </div> <!-- row -->
                      
                       <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group col-md-4 col-sm-6 col-xs-12"> 
                                   <p> <input type="text" name="ptype" class="form-control" id="papertype" placeholder="Type of Paper"/></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-8 col-sm-6 col-xs-12"> 
                                 <input type="text" name= "bm3" class="form-control" id="ptbmember" placeholder="Board member-In-Charge"/>
                                </div>     
                        </div>
                      </div> <!-- row -->

                         <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group col-md-4 col-sm-6 col-xs-12"> 
                                   <p> <input type="Number" name="ncolor" class="form-control" id="numcolor" placeholder="Number of Color"/></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-8 col-sm-6 col-xs-12"> 
                                    <input type="text" name="bm4" class="form-control" id="ncbmember" placeholder="Board member-In-Charge"/>
                                </div>     
                        </div>
                      </div> <!-- row -->

                       <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">

                                <div class="form-group col-md-4 col-sm-6 col-xs-12"> 
                                   <p> <input type="Number" name="ncopies" class="form-control" id="numcopies" placeholder="Number of copies"/></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-8 col-sm-6 col-xs-12"> 
                                    <input type="text" name="bm5" class="form-control" id="ncpbmember" placeholder="Board member-In-Charge"/>
                                </div>     
                        </div>
                      </div> <!-- row -->

                        <div class="ln_solid"></div> 
                      
                       <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">                                  
                                <label class= "col-md-6"> <h4>Publication Content</h4> </label>
                                <div class="form-group col-md-10 col-sm-10 col-xs-10">
                                    <textarea name=pcont class="form-control" rows="6"></textarea>
                                </div>      
                        </div>     
                      </div> <!-- row -->

    
                        
                        <div class="form-group">
                                  <div class="col-md-12 col-md-offset-11">
                                    <input id="send" type="submit" class="btn btn-success align: right" value="Next">
                                  </div>
                        </div>

                        </form>
                      
                      </div> <!-- row -->
                     </div>
                    <div class="ln_solid"></div> 
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
	
	 var pubform2= $('#pubform2');
	pubform2.validate({
		rules: {
			npages: {
				required: true,
				minlength: 1
			},

			ssize: {
				required: true,
				minlength: 1
			},

			ptype: {
				required:true 
			},			
			
			ncolor: {
				required: true,
				minlength: 1
			},
			
			ncopies: {
				required: true,
				minlength: 1
			},

			pcont: "required",

			bm1: {
				required:true,
				lettersonly:true
			},
			bm2:{ 
				required:true,
				lettersonly:true
			},
			bm3: {
				required:true,
				lettersonly:true
			},
			bm4: {
				required:true,
				lettersonly:true
			},
			bm5: {
				required:true,
				lettersonly:true
			}

			
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			npages: {
				required: 'Enter # of pages',
				minlength: 1
			},

			ssize: {
				required: 'Enter spread size',
				minlength: 1
			},

			ptype: {
				required: 'Enter paper type'		
			},
			
			ncolor: {
				required: 'Enter # of colors',
				minlength: 1
			},
			
			ncopies: {
				required: 'Enter # of copies',
				minlength: 1
			},

			pcont:{
				required: 'Enter publication content'

			},

			bm1:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			},

			bm2:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			},

			bm3:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			},

			bm4:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			},

			bm5:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
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