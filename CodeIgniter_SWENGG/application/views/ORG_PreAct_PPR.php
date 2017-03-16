<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LSCS</title>

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

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.min.js"></script>

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
                <h2> LSCS</h2>
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
                   La Salle Computer Society
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

		<!-- Main content -->
        <div class="right_col" role="main">
          
          <div class="page-title">
              <div class="title_left">
                  <h3>Project Proposal</h3>
              </div>
          </div>
          
          <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                          <form class="form-horizontal form-label-left" id= "pprform1" method="post">
                            <div class="row" id="ph">
                              <span class="section">General Information</span>
                              <label> <h3> Project Head </h3> </label>
                                <div class="col-md-12 col-sm-12 col-xs-12" id="new">
                                  <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                      <input type="text" name="phname[]" class="form-control has-feedback-left" id="name" placeholder="Name">
                                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                      <input type="text" name="phnum[]" class="form-control" id="contact" placeholder="Contact Number">
                                      <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                 <button id="addc" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                 <button id="remc" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                               </div>
                            </div>

                            <div class="row">
                             <p><label> <h3> Objectives</h3> </label></p>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="obje1" class="form-control" id="obj1" placeholder="1st Objective">
                                  <p></p>
                                  <input type="text" name="obje2" class="form-control" id="obj2" placeholder="2nd Objective">
                                  <p></p>
                                  <input type="text" name="obje3" class="form-control" id="obj3" placeholder="3rd Objective">
                                </div>
                            </div>
                
                            <div class= "row">
                             <p><label> <h3> Brief Description of Activity </h3> </label></p>
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <p class="text-success">/*Guidelines per paragraph are shown here.*/</p>
                                 <textarea name="desc1" class="form-control"></textarea> 

                                <p class="text-success">/*Guidelines per paragraph are shown here.*/</p>
                                 <textarea  name="desc2" class="form-control"></textarea>

                                <p class="text-success">/*Guidelines per paragraph are shown here.*/</p>
                                 <textarea  name="desc3" class="form-control"></textarea>
                              </div>
                            </div>

                            <div class= "row">
                              <p><label><h3> Faculty Adviser</h3></label></p>
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                               
                              </div>
                            </div>

                            <div class="ln_solid"></div> 
                            <div class="form-group">
                              <div class="col-md-12 col-md-offset-11">
                                <input id="nextbppr" type="submit" class="btn btn-success align: right" value="Next">
                              </div>
                            </div>
                          </form>  
                        </div>
                    </div>
                </div>
            </div>

         </div>
        <!-- /page content -->

    <!-- VALIDATION -->
    <script type="text/javascript">
      $(function() {
        function removeError(element){
          element.addClass('valid').closest('.form-group').removeClass('has-error');
        }

        $('#pprform1').validate({
        
        rules: {
          'phname[]':{
            required:true,
            lettersonly: true
          },
          'phnum[]': {
            required: true,
            maxlength: 11,
            minlength: 11
          },
          obje1:  "required",
          obje2:  "required",
          obje3:  "required",
          desc1:  "required",
          desc2:  "required",
          desc3:  "required",

        },

        highlight: function(element){ 
          $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
        },
        success: removeError,
        messages: {
          'phname[]': {
            required: 'Enter project head name',
            lettersonly:'Alphabetic characters only'
          },

          'phnum[]':{
            required: 'Enter project head contact number',
            maxlength: 'Invalid contact number',
            minlength: 'Invalid contact number'
          },

          obje1: {
            required: 'Enter objective'
          },

          obje2: {
            required: 'Enter objective'
          },

          obje3: {
            required: 'Enter objective'
          },

          desc1: {
            required: 'Enter description'
          },

          desc2: {
             required: 'Enter description'
          },

          desc3: {
            required: 'Enter description'
          },
        }
        });

         $("#addc").click(function(){
              $("#ph").append(' <div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="phname[]" class="form-control has-feedback-left" id="name" placeholder="Name"><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="phnum[]" class="form-control" id="contact" placeholder="Contact Number"><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span></div></div></div>');   
         });

        $("#remc").click(function(){
            var v= document.getElementById("newph");
            v.remove();
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
    <script src="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>x

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>build/js/custom.min.js"></script>

  </body>
</html>
