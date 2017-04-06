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
    <script src="<?php echo base_url();?>js/jquery.validate.min.js"> </script>
    <script src = "http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"> </script>

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
      
    <!-- page content -->
        <div class="right_col" role="main">
          <div class= "infoPanel">
            <div class="infoHead" data-toggle="collapse" href="#info">
              <h3> Application for Use of Trademark
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
                <h4><b> Important Reminders: </b>
                <ol>
                  <li>Accomplish two (2) copies of this form for your office/organization and STRATCOM reference.</li>
                  <li>Attach a copy of the proposed design/layout of the merchandise/print material/video.</li>
                  <li>Allow five (5) days processing for the approval of the merchandise/print material/video.  </li>
                  <li>Strictly follow the approved duration and quantity for the use of trademark. </li>
                  <li>Check the remarks on the attachments.</li>
                </ol></h4>
            </div>
          </div>
                
          <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form method="post" id = "formTrademark" autocomplete="off">
                     <span class="section"></span>

                      <div class= "row">
                        <div class="col-md-8 form-group">   
                          <label class= "col-md-4"> <h4>Name:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "Name" class="form-control" placeholder="ex: Juan Dela Cruz" />
                            </div>        
                        </div>
                      </div> 

                      <div class= "row">
                        <div class="col-md-8 form-group">   
                          <label class= "col-md-4"> <h4>Position:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "Position" class="form-control" placeholder="ex: Executive Vice President" />
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8 form-group">   
                          <label class= "col-md-4"> <h4>ID Number</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "IDNum" class="form-control" placeholder="ex: 11344444" />
                            </div>        
                        </div>
                      </div>  

                      <div class= "row form-group">
                        <div class="col-md-8">   
                          <label class= "col-md-4"> <h4>Email Address</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "Email" class="form-control" placeholder="ex: juan_delacruz@dlsu.edu.ph" />
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8 form-group">   
                          <label class= "col-md-4"> <h4>Telephone Number</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "TelNo" class="form-control" placeholder="ex: 6341111" />
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-4 form-group"> <h4>Cellphone Number</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "CPNo" class="form-control" placeholder="ex: 09179999999" />
                            </div>        
                        </div>
                      </div>  

                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div align="right">
                          <input id="nextTrademark" type="submit" class="btn btn-success" value ="Next" style="width: 80px">
                        </div>
                      </div>
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>

    <!-- SCRIPT FOR VALIDATION -->
   <script type="text/javascript">
      $(function() {
        function removeError(element){
          element.addClass('valid').closest('.form-group').removeClass('has-error');
        }

        $('#formTrademark').validate({
        rules: {
          Name: {
            required:true,
          },
          Position: {
            required:true
          },
          IDNum: {
            required:true,
            maxlength: 8,
            minlength: 8
          
          },
          Email: {
            required:true,
            email: true
          },
          TelNo: {
            maxlength: 7,
            minlength: 7

          },
          CPNo: {
            required:true,
            maxlength: 11,
            minlength: 11,
          }
        },

            highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
          },
          success: removeError,


        messages:{
          Name: {
            required: 'Enter name',
            lettersonly: 'Alphabetic characters only'
          },
          Position: {
            required: 'Enter position'
          },
          IDNum: {
            required: 'Enter ID number',
            maxlength: 'Invalid ID number',
            minlength: 'Invalid ID number'
          
          },
          Email: {
            required: 'Enter DLSU e-mail',
            email: 'Invalid DLSU e-mail'
          },
          TelNo: {
            maxlength: 'Invalid telephone number',
            minlength: 'Invalid telephone number'
          },
          CPNo: {
            required: 'Enter cellphone number',
            minlength: 'Invalid cellphone number',
            maxlength: 'Invalid cellphone number'
          },
        }
        });
      })
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
