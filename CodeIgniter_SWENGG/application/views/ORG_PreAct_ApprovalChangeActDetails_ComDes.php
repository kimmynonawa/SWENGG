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


          
        <div class="right_col" role="main">
          <div class="">
            <div class= "x_panel">
              <div class= "row">
                <div class="title col-md-5">
                  <h3>Approval in Changes of Activity Details</h3>
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
                      <form class="form-inline form-label-left" id="changecom" action="ComDes" method="post">
                      <span class="section"></span>
                    

                      <div class= "row">
                        <div class="col-md-12">   
                          <span class="section">Comprehensive Program Design</span>
                          <div class= "form-group col-md-12">
                            <table class="table table-striped">
                              <thead>
                                 <tr>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Activity</th>
                                <th>Duration</th>
                                <th>Description</th>
                                <th>Person In-Charge</th>
                              </tr>
                              </thead>
                              <tbody id="trcomdes">
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div class = "buttons col-md-12">
                          <div class="col-md-3">
                                 <button id="addcom" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                 <button id="remcom" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                          </div>    
                        </div>
                      </div>  
                        <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-11">
                           <input id="nextApproveChanges" type="submit" class="btn btn-success align: right" value ="Next">
                        </div>
                      </div> 
                    </form>
                        
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>
        <!-- /page content -->

    <!-- jQuery -->
    <script>
  $(function(){
      jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z\s]+$/i.test(value);
      })

      function removeError(element){
      element.addClass('valid')
          .closest('.form-group')
          .removeClass('has-error');
      }

      var numberIncr = 0;
      $("#trcomdes").append('<tr><td><input  class="stm form-control" type="time" name="time[' + numberIncr + ']"> </td><td><input class="stc form-control" type= "time" name="stime[' + numberIncr + ']"> </td><td> <input class="nmc form-control" type="text" name="aname[' + numberIncr + ']" id="act" placeholder="Activity name"/></td><td> <input class="drc form-control" type="text" name="adur[' + numberIncr + ']"  id="dur" disabled="true" /></td><td> <input class="dsc form-control" type="text" name="ades[' + numberIncr + ']" id="des" placeholder="Description of Activity"/></td><td> <input class="pcc form-control" type="text" name="apic[' + numberIncr + ']" id="icharge" placeholder="Person in-charge"/></td></tr>');   

      var ccom= $('#changecom');
      ccom.validate({
        rules: {
          'aname[0]':"required",
          
          'stime[0]': "required",

          'time[0]': "required",

          'ades[0]':"required",
          
          'apic[0]': {
            required: true,
            lettersonly: true
          }
        },
        highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
        },
        success: removeError,


        messages: {
          'aname[0]': {
            required: 'Enter activity name'
          },

          'stime[0]':{
            required: 'Enter time'
          },

          'time[0]':{
            required: 'Enter time'
          },

          'ades[0]':{
            required: 'Enter description'
          },

          'apic[0]':{
            required: 'Enter name',
            lettersonly: 'Alphabetical characters only'
          }
        }
        });     

      $("#addcom").click(function() {
        numberIncr++;
          $("#trcomdes").append($('<tr id="newtr"><td> <input class="stm form-control"  type="time" name="time[' + numberIncr + ']"> </td><td><input class="stc form-control" type= "time" name="stime[' + numberIncr + ']"> </td><td> <input class="nmc form-control" type="text" name="aname[' + numberIncr + ']"  placeholder="Activity name"/></td><td> <input class="drc form-control" type="text" name="adur[' + numberIncr + ']"   disabled="true" /></td><td> <input class="dsc form-control" type="text" name="ades[' + numberIncr + ']"  placeholder="Description of Activity"/></td><td> <input class="pcc form-control" type="text" name="apic[' + numberIncr + ']"  placeholder="Person in-charge"/></td></tr>'));   

          $(".stm").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter time'
          }
        });
          });
          
            $(".stc").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter time'
          }
        });
          });

           $(".nmc").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter activity name'
          }
        });
          });

          $(".dsc").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter description'
          }
        });
          });

          $(".pcc").each(function(){
            $(this).rules( "add", {
            required:true,
            lettersonly: true,
          messages: {
            required: 'Enter name',
          lettersonly: 'Alphabetical characters only'
            
          }
        });
          });


         });

        $("#remcom").click(function(){
           var v= document.getElementById("newtr");
           v.remove(); 
          });
      $('#nextbchangecom').click(function() {
             if (ccom.valid()){
               window.location.href = "";
             }
              return false  
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
