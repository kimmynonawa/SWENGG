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
      
    <!-- page content -->
        <div class="right_col" role="main">
          <div class= "infoPanel">
            <div class="infoHead" data-toggle="collapse" href="#info">
              <h3> Activity Approval Form
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
              <h4> <p>The Activity Approval Form is filled out in order to determine the different details about the activity that the organization is planning to have. This must be downloaded for approval along with the PPR after filling out the necessary fields.</p></h4>
            </div>
          </div>
                
            <div class="clearfix"></div>


        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <form id="aform2" action="aformGOSM2" method="post" autocomplete="off">
                  <span class="section">Activity Details</span>
					<!-- <?php var_dump ($this->session->userdata('aform1'));?> -->
					
                  <div class= "row" id="dates"> </div> 
                  <div class= "row">
                    <div class="col-md-10">   
                      <label class= "col-md-4"> <h4></h4></label>
                      <div class= "form-group col-md-4">
                        <select name ="select" id ="select" class="form-control"> 
                          <option disabled selected> Select Kind Of Date </option>
                          <option value = "1"> Single Date</option>
                          <option value = "2"> Date Range with the same time slot</option>
                        </select>
                      </div>
                      <div class="col-md-2">
                           <button type="button" class="form-control" id="dateOption" > Add Date</button>
                      </div>       
                    </div>
                  </div>  

                  <div class= "row">
                    <div class="col-md-10">   
                      <label class= "col-md-4"> <h4>Venue</h4> </label>
                      <div class= "form-group col-md-4">
                        <input type="text" name= "venue" class="form-control" placeholder="Ex: Marian Quadrangle"/>
                      </div>       
                    </div>
                  </div>  

                  <div class= "row">
                    <div class="col-md-10">   
                      <label class= "col-md-4"> <h4>Expected Number of Members to Participate (ENMP) </h4> </label>
                      <div class= "form-group col-md-4">
                        <input type="Number" min="1" name= "enmp" id="enmp" class="form-control" placeholder="ex: 80" />
                      </div>       
                    </div>
                  </div>  

                  <div class= "row">
                    <div class="col-md-10">   
                      <label class= "col-md-4"> <h4>Expected Number of Participants (ENP) </h4> </label>
                      <div class= "form-group col-md-4">
                        <input type="Number" name= "enp" min="1" id= "enp" class="form-control" placeholder="Should be greater than or equal to ENMP"/>
                      </div>       
                    </div>
                  </div>  

                  <div class="ln_solid"></div> 

                  <div class="form-group">
                    <div align="right">
                      <button type="submit" class="btn btn-success" style="width: 80px">Next</button>
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
   <script>

   $(document).ready(function () {
        jQuery.validator.addMethod("lettersonly", function(value, element) {
           return this.optional(element) || /^[a-z\s]+$/i.test(value);
        })

         jQuery.validator.addMethod("endtime", function(value, element) {
            var startTime = $('.starttime').val();
            return Date.parse(startTime) <= Date.parse(value) || value == "";
        });

        jQuery.validator.addMethod("enddate", function(value, element) {
            var startDate = $('.startdate').val();
            return Date.parse(startDate) <= Date.parse(value) || value == "";
        });

        function removeError(element){
          element.addClass('valid')
              .closest('.form-group')
              .removeClass('has-error');
        }

      var aform2= $('#aform2');
      var numberInc=0;
      var numberIncr=0;

      $('#dateOption').on('click', function () {
        var choice = document.getElementById("select").value;
 
        if(choice==1){
          event.preventDefault();
          $('#dates').append($('<p></p><div class="details"><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Date</h4></label></div> <div class= "form-group col-md-4"><input class= "dt form-control" type="date" name="sDate[' + numberInc + ']"/> </div><div class="col-md-2"><button class="form-control btn btn-danger" id="rDate" name="rDate"> Remove Date</button></div></div></div><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Time</h4></label></div> <div class= "form-inline col-md-4"><input type="time" name= "s1Time[' + numberInc + ']" id="startTime" class="form-control" style="width:129px" /> - <input class= "etm form-control" type="time" name= "e1Time[' + numberInc + ']" class="form-control" style="width:130px"/></div></div></div><div class="row" id ="time"> </div></div>'));
              numberInc++;
              
            $(".dt").each(function(){
             $(this).rules( "add",{
                required:true,
              messages: {
                required: 'Enter date'
              }
             });
            });

            $(".endtime").each(function(){
                $(this).rules( "add", {
                required:true,
                endtime: true,
              messages: {
                required: 'Enter time',
                endtime: "End time must be after start time"

              }
             });
         });

          $(".starttime").each(function(){
                $(this).rules( "add", {
                required:true,
              messages: {
                required: 'Enter time'
              }
             });
            });;



          $(document).on("click", "#rDate", function(){
            (this).closest(".details").remove();
          });
        } else if(choice==2){
          $('#dates').append($('<p></p><div class="details"><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Date</h4></label></div> <div class= "form-inline col-md-4"><input type="date" name= "drsDate[' + numberIncr + ']" id="startDate" class="form-control" style="width:129px" /> - <input class="eda form-control" type="date" name= "dreDate[' + numberIncr + ']"  style="width:130px"/></div><div class="col-md-2"><button class="form-control btn btn-danger" id="rDate" name="rDate"> Remove Date</button></div></div></div> <div class="row" id ="time"> </div><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Time</h4></label></div> <div class= "form-inline col-md-4"><input type="time" name= "s2Time[' + numberIncr + ']" id="startTime" class="form-control" style="width:129px" /> - <input class="eti form-control" type="time" name= "e2Time[' + numberIncr + ']"  style="width:130px"/></div></div>'));

             numberIncr++;
            $(".enddate").each(function(){
                $(this).rules( "add", {
                required:true,
                enddate: true, 
              messages: {
                required: 'Enter date',
                enddate: "End date must be after start date"
              }
             });
            });

            $(".startdate").each(function(){
                $(this).rules( "add", {
                required:true,
              messages: {
                required: 'Enter date',
              }
             });
            });

            $(".endtime").each(function(){
                $(this).rules( "add", {
                required:true,
                endtime: true,
              messages: {
                required: 'Enter time',
                endtime: "End time must be after start time"
              }
             });
            });

            $(".starttime").each(function(){
                $(this).rules( "add", {
                required:true,
              messages: {
                required: 'Enter time'
              }
             });
            });

          $(document).on("click", "#rDate", function(){
            (this).closest(".details").remove();
          });
        }
      });

    aform2.validate({
    rules: {
    'Date[0]': "required",
    'sTime[0]': "required",
    'eTime[0]': "required",
      enmp: {
        required:true,
        maxlength: 6
      },
      enp: {
        required:true,
        maxlength: 6
      },
      venue: {
        required: true
      },
      select: {
        required: true
      }
    },
    highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
    },
    success: removeError,

    messages:{
    'Date[0]':{
      required: 'Enter date'
    },
    'eTime[0]':{
      required: 'Enter time'
    },
    'eTime[0]':{
      required: 'Enter time'
    },
      enmp: {
        required:  'Enter expected number of members',
        maxlength: 'Maximum number of participants exceeded'
      },
      enp: {
        required: 'Enter expect number of participants',
        maxlength: 'Maximum number of participants exceeded'
      },
      venue: {
        required: 'Enter venue'
      },
      select: {
        required: 'Please select duration of activity'
      }
    }
    });

    
    $('#nextaform2').click(function() {
      if (aform2.valid()){
          window.location.href = "";
        }
        return false;
      });

   });

  </script>
 
</html>
