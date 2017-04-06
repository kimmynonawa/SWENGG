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
              <h3> Project Proposal
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
                <h4>The Project Proposal contains the more comprehensive and detailed description of event that the organization is planning to have. </h4>
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
                            </div>

                            <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group"></div>
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group"></div>
                                <button id="addc" type ="button" class ="btn btn-default" style="width:80px">Add</button>
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
                               <ul><li>What situation do you see (observation/s) in your organization, university, society, or our world? </li><li>What certain experiences, problems, or questions do you have in relation to what you see? (May be supported with data or research if there is any or if needed)</li></ul>
                                 <textarea rows="3" name="desc1" class="form-control"></textarea> 
                                <br>
                               <ul><li>Why is there a problem? </li><li>What could be the cause and effect?</li><li>How did you feel about the experience, situation, or problem? And why did you feel that way?</li><li>What can we discover or realize?</li></ul>
                                 <textarea  rows="3" name="desc2" class="form-control"></textarea>
                                <br>
                                <ul><li> Out of all the possible projects, activities, and solutions, Why this?</li><li>As an organization, what will you commit as a response to what you have stated in Part 2?</li></ul>
                                 <textarea rows="3" name="desc3" class="form-control"></textarea>
                              </div>
                            </div>  

                            <div class="ln_solid"></div> 
                            <div class="form-group">
                              <div align="right">
                                <input id="nextbppr" type="submit" style="width:80px" class="btn btn-success align: right" value="Next">
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
      jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z\s]+$/i.test(value);
      })

      function removeError(element){
      element.addClass('valid')
          .closest('.form-group')
          .removeClass('has-error');
      }
 
      var numberIncr = 0;

      // append basic table data

      $("#ph").append($('<div class="col-md-12 col-sm-12 col-xs-12" id="ne"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input class="phname form-control has-feedback-left" name="phname[' + numberIncr + ']" placeholder="Name" type="text"/><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input class="phnum form-control has-feedback-right" name="phnum[' + numberIncr + ']" placeholder="Contact Number" /><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span></div></div></div>'));

      $("#addc").on('click', function () {
           numberIncr++;
           var temp = $("#ph").append($('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input class="phname form-control has-feedback-left" name="phname[' + numberIncr + ']" placeholder="Name" /><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input class="phnum form-control has-feedback-right" name="phnum[' + numberIncr + ']" placeholder="Contact Number" /><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span></div><button id="remc" type ="button" class ="btn btn-danger">Remove</button></div></div>'));  
           
          $(".phname").each(function(){
            $(this).rules( "add", {
            required:true,
            lettersonly: true,
          messages: {
            required: 'Enter project head name',
            lettersonly:'Alphabetic characters only'
          }
        });
          });

          $(".phnum").each(function(){
            $(this).rules( "add", {
            required: true,
            maxlength: 11,
            minlength: 11,
          messages: {
            required: 'Enter project head contact number',
            maxlength: 'Invalid contact number',
            minlength: 'Invalid contact number'
          }
        });
          });

        });


     $(document).on('click',"#remc", function () {
            var v= document.getElementById("new");
            v.remove();
      }); 


      $("#pprform1").validate({
      rules:{
        'phname[0]' : "required",
        'phnum[0]'  : "required",
        obje1:  "required",

        obje2:  "required",

        obje3:  "required",

        desc1:  "required",

        desc2:  "required",
        
        desc3:  "required"

      },
      highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
      },
        success: removeError,
      messages:{
        'phname[0]':{
          required: "Enter project head name"
        },
        'phnum[0]':{
          required: "Enter project head contact number"
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
    <script src="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>x

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>build/js/custom.min.js"></script>

  </body>
</html>
