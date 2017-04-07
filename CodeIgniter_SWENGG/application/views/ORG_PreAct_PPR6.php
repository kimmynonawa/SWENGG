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
        <div class="col-md-3 left_col ">
          <div class="clearfix"></div>
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section nav side-menu"> 
            <br>      
            <li><a href="http://localhost/index.php/gosm/add"><i class="fa fa-edit side-menu"></i>Create New GOSM</a></li>
            <li><a href="http://localhost/index.php/Preactivity/preacts"><i class="fa fa-edit side-menu"></i>Pre-Activity Requirements</a></li>
            <li><a href="http://localhost/index.php/Preactivity/other_requirements"><i class="fa fa-edit side-menu"></i>Additional Requirements</a></li>
            <li><a href="http://localhost/index.php/viewpreacts/viewpreacts"><i class="fa fa-folder-open"></i> View Pre-Acts</a></li>
            <li><a href="http://localhost/index.php/gosm/viewORGGosm1"><i class="fa fa-list-alt"></i> View GOSM</a></li>
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
                
                <li><a href="http://localhost/index.php/account/org"><i class="fa fa-home"></i> Home</a></li>
              </li>
            </ul>
          </nav>
        </div>
      </div>

		<!-- Main content -->
		<div class="right_col" role="main">
          <div class="">
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
                     <form class=" form-label-left" id="pprform6" method="post">
                    <span><h3> Signatories </h3></span>
                    <div class="ln_solid"></div> 
                    
                    <div class="form-group">
                      <label><h4><b> Breakdown of Expenses</b></h4></label>
                      <span><h5>* Enter the name of the VP Finance of the organization.</h5></span>
                      <span><h5>* Enter the name of the Treasurer. (for USG only) </h5></span>
  
                          <div class="row">
                              <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                               <input class="treasurer form-control has-feedback-left" name="treasurer" placeholder="Name" /><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> 
                          </div>   

                      <label><h4><b>Prepared by</b></h4></label>
  
                          <div class="row">
                              <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                               <input class="preparedby form-control has-feedback-left" name="preparedby" placeholder="Name" /><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> 
                          </div> 

                     <label><h4><b>Provisions for Profit and Loss</b> </h4></label>
                     <span><h5>* At least one (1) signatory should be the vice president and up.</h5></span>
                     <span><h5>* They will shoulder any remaining balance incurred by the project.</h5></span>
  
                          <div class="row">
                              <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                               <input class="provname1 form-control has-feedback-left" name="provname1" placeholder="Name" /><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> 
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                               <input class="provpos1 form-control has-feedback-right" name="provpos1" placeholder="Position" /><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                               </div>
                          </div>
                          <div class="row">
                              <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                               <input class="provname2 form-control has-feedback-left" name="provname2" placeholder="Name" /><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> 
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                               <input class="provpos2 form-control has-feedback-right" name="provpos2" placeholder="Position" /><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                               </div>
                          </div>

                      <label><h4><b>Noted by:</b> </h4></label>
                      <span><h5>* Should be the president and faculty in charge of the organization.</h5></span>
  
                          <div class="row">
                              <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                               <input class="president form-control has-feedback-left" name="president" placeholder="President Name" /><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> 
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                               <input class="facin form-control has-feedback-right" name="facin" placeholder="Faculty-In-Charge" /><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                               </div>
                          </div>
                    </div>

                      <div class="col-md-12 col-md-offset-11">
                        <button id="nextbppr6" type="submit" class="btn btn-success align: right">Next</button>
                      </div>
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 

          </div>
        </div>
        <!-- /page content -->

    <!-- SCRIPT FOR VALIDATION AND ROW ADDING -->
   <script type="text/javascript">
      $(function() {
       jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z\s]+$/i.test(value);
  })

  function removeError(element){
  element.addClass('valid')
      .closest('.form-group')
      .removeClass('has-error');
  }


  var pprform6= $('#pprform6');
  pprform6.validate({
    rules: {
        treasurer:{
          required: true,
          lettersonly: true
        },
        preparedby:{
          required: true,
          lettersonly: true
        },
        provpos1:{
          required: true,
          lettersonly: true
        },
        provname1:{
          required: true,
          lettersonly: true
        },
        provpos2:{
          required: true,
          lettersonly: true
        },
        provname2:{
          required: true,
          lettersonly: true
        },
        president:{
          required: true,
          lettersonly: true
        },
        facin:{
          required: true,
          lettersonly: true
        }
    },
    highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
    },
    success: removeError,


    messages: {
        treasurer:{
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
          
        },
        preparedby:{
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
        },
        provpos1:{
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
        },
       provname1:{
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
        },
        provpos2:{
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
        },
        provname2:{
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
        },
        president:{
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
        },
        facin:{
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
        }
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
