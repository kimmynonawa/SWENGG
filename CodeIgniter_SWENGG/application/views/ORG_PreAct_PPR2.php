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
                     <form class=" form-label-left" id="pprform2" method="post">
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
                                <th>&nbsp</th>
                              </tr>
                              </thead>
                              <tbody id="tr">
                              </tbody>
                               <tr>
                                <td>&nbsp&nbsp</td>
                                <td>&nbsp&nbsp</td>
                                <td>&nbsp&nbsp</td>
                                <td>&nbsp&nbsp</td>
                                <td>&nbsp&nbsp</td>
                                <td>&nbsp&nbsp</td>
                                <td><button id="addc2" type ="button" class ="btn btn-default"> Add</button></td>
                             </tr>

                            </table>
                          </div>
                        </div>
                      </div>  
                        <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-11">
                          <button id="nextbppr2" type="submit" class="btn btn-success align: right">Next</button>
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

    <!-- SCRIPT FOR VALIDATION AND ROW ADDING -->
   <script type="text/javascript">

  function getDuration(num){
    var start = document.getElementsByClassName("stm")[num].value;
    var end=document.getElementsByClassName("stc")[num].value;
    var diff=moment.utc(moment(end,"HH:mm:ss").diff(moment(start,"HH:mm:ss"))).format("HH:mm:ss")
    var div= diff.split(":");
    var hour= (+div[0]);
    var min=(+div[1]);
    var duration;

    if(start.length>0){
      if(hour==0){
        if(min==1){
          duration = "1 minute";
        }
        else{
          duration = min + " mins";
        }
        document.getElementsByClassName("drc").item(num).value =duration;
      }
      else{
        if(hour>1 && min==0){
          duration = hour + " hours";
        }
        else if(hour==1 && min==0){
          duration= "1 hour";
        }
        else if(hour==1 && min>0){
          duration = "1 hr and " + min + " mins";
        }
        else{
          duration = hour + " hrs and " + min + " mins"
        }
        document.getElementsByClassName("drc").item(num).value =duration;
      }
    }
  }
  $(function() {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z\s]+$/i.test(value);
  })

  function removeError(element){
  element.addClass('valid')
      .closest('.form-group')
      .removeClass('has-error');
  }

  jQuery.validator.addMethod("endtime", function(value, element) {
            var startTime = $('.stm').val();
            return Date.parse(startTime) <= Date.parse(value) || value == "";
  });

  var numberIncr = 0;
  $("#tr").append('<tr><td> <input  class="stm form-control" type="time" style="width:120px" name="time[' + numberIncr + ']"> </td><td><input class="stc form-control" onchange="getDuration(' + numberIncr + ')" type= "time" style="width:120px" name="stime[' + numberIncr + ']"> </td><td> <input class="nmc form-control" type="text" name="aname[' + numberIncr + ']" id="act" placeholder="ex: Game"/></td><td> <input class="drc form-control" type="text" name="adur[' + numberIncr + ']" value="" readonly/></td><td> <input class="dsc form-control" type="text" name="ades[' + numberIncr + ']" id="des" placeholder="ex: Ice Breaker"/></td><td> <input class="pcc form-control" type="text" name="apic[' + numberIncr + ']" id="icharge" placeholder="ex: Juan Dela Cruz"/></td><td></td></tr>');   

  var pprform2= $('#pprform2');
  pprform2.validate({
    rules: {
      'aname[0]':"required",
      
      'stime[0]':{
        required: true,
        endtime: true
      },

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
        required: 'Enter time',
        endtime: 'End time should be after start time'
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

  $("#addc2").click(function() {
    numberIncr++;
      $("#tr").append($('<tr><td> <input  class="stm form-control" type="time" style="width:120px" name="time[' + numberIncr + ']"> </td><td><input class="stc form-control" onchange="getDuration(' + numberIncr + ')" type= "time" style="width:120px" name="stime[' + numberIncr + ']"> </td><td> <input class="nmc form-control" type="text" name="aname[' + numberIncr + ']" id="act" placeholder="ex: Game"/></td><td> <input class="drc form-control" type="text" name="adur[' + numberIncr + ']" value="" readonly/></td><td> <input class="dsc form-control" type="text" name="ades[' + numberIncr + ']" id="des" placeholder="ex: Ice Breaker"/></td><td> <input class="pcc form-control" type="text" name="apic[' + numberIncr + ']" id="icharge" placeholder="ex: Juan Dela Cruz"/></td><td></td></tr>'));   

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
        endtime: true,
      messages: {
        required: 'Enter time',
        endtime: 'End time should be after start time'
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
    $(document).on('click',"#remc2", function () {
       var v= document.getElementById("newtr");
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
    <script src="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>build/js/custom.min.js"></script>
	
  </body>
</html>
