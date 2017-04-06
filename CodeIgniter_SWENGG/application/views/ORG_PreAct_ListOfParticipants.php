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
   <script src = "http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"> </script>

	<!-- Bootstrap -->
    <link href="<?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar  -->
    <link href="<?php echo base_url();?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <!-- Switchery -->
    <link href="<?php echo base_url();?>vendors/switchery/dist/switchery.min.css" rel="stylesheet">
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
              <h3> List Of Participants
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
                <h4>The List of Participants contains all of the students who will participate in activity and whether they have a waiver or not. </h4>
            </div>
          </div>
                
          <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="form-group" >
                    <center> <h3>List of Participants</h3></center>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                    <form id ="LPForm" action="list_of_participants" method ="post">
                      <div class="x_content">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>ID Number</th>
                              <th>Last Name</th>
                              <th>First Name</th>
                              <th>Middle Initial</th>
                              <th>Age</th>
                              <th>Waiver</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody id="student">
                          </tbody>
                          <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><button id="add" type ="button" class ="btn btn-default">Add</button></td>
                          </tr>
                        </table>
                      </div>
                        


                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div align="">
                          <input type="submit" class="btn btn-success" value ="Next" style="width: 80px"> <p></p>
                        </div>
                      </div>
                    </form>
                  </div>    
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->
		
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
  $('#student').append($('<tr id ="detail" class="details"><td>  <input class="idc form-control" name ="id[' + numberIncr + ']" placeholder ="Enter ID Number" /></td><td>  <input class="lnc form-control" name ="lName[' + numberIncr + ']" placeholder ="Enter Last Name" /></td> <td>  <input class="fnc form-control" name = "fName[' + numberIncr + ']" placeholder ="Enter First Name" /></td><td>  <input class="mnc form-control" name ="mName[' + numberIncr + ']" placeholder ="Enter Middle Initial" /></td><td>  <input class="mge form-control" name = "age[' + numberIncr + ']" placeholder ="Enter Age" style ="width:120px"/></td><td> <input type="checkbox" class="js-switch" name="choice" /></td><td></td></tr>'));

  $("#add").click(function () {
     numberIncr++;
    $('#student').append('<tr id ="detailz" class="details"><td>  <input class="idc form-control" name ="id[' + numberIncr + ']" placeholder ="Enter ID Number" /></td><td>  <input class="lnc form-control" name ="lName[' + numberIncr + ']" placeholder ="Enter Last Name" /></td> <td>  <input class="fnc form-control" name = "fName[' + numberIncr + ']" placeholder ="Enter First Name" /></td><td>  <input class="mnc form-control" name ="mName[' + numberIncr + ']" placeholder ="Enter Middle Initial" /></td><td>  <input class="mge form-control" name = "age[' + numberIncr + ']" placeholder ="Enter Age" style ="width:120px"/></td><td> <input type="checkbox" class="js-switch" name="choice" /></td><td><button id="delete" type ="button" class="btn btn-danger">Remove</button></td></tr>');
    $(".idc").each(function(){
        $(this).rules( "add", {
        required: true,
        maxlength: 8,
        minlength: 8,
      messages: {
        required: 'Enter ID number',
        maxlength: 'Invalid ID number',
        minlength: 'Invalid ID number'
      }
    });
      });

       $(".lnc").each(function(){
        $(this).rules( "add", {
        required:true,
        lettersonly: true,
      messages: {
        required: 'Enter last name',
        lettersonly: 'Alphabetic characters only'
      }
    });
      });

       $(".fnc").each(function(){
        $(this).rules( "add", {
        required:true,
        lettersonly: true,
      messages: {
        required: 'Enter first name',
        lettersonly: 'Alphabetic characters only'
      }
    });
      });

      $(".mnc").each(function(){
        $(this).rules( "add", {
        required:true,
        lettersonly: true,
      messages: {
        required: 'Enter middle initial',
        lettersonly: 'Alphabetic characters only'
      }
    });
      });

       $(".mge").each(function(){
        $(this).rules( "add", {
        required: true,
        maxlength: 2,
        min: 9,

      messages: {
        required: 'Enter age',
        maxlength: 'Invalid age',
        min: 'Invalid age'
      }
    });
      });


    });

  var lop= $('#LPForm');
  lop.validate({
    rules: {
      'id[0]':{
        required: true,
        maxlength: 8,
        minlength: 8
      },
      'lName[0]':{
        required:true,
        lettersonly: true
      },
      'fName[0]':{
        required:true,
        lettersonly: true
      },
      'mName[0]':{
        required: true,
        lettersonly: true
      },
      'age[0]':{
        required: true,
        maxlength: 2,
        min: 9
      }
    },
    highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
    },
    success: removeError,

    messages:{
      'id[0]':{
        required: 'Enter ID number',
        maxlength: 'Invalid ID number',
        minlength: 'Invalid ID number'
      },
      'lName[0]':{
        required: 'Enter last name',
        lettersonly: 'Alphabetic characters only'
      },
      'fName[0]':{
        required: 'Enter first name',
        lettersonly: 'Alphabetic characters only'
      },
      'mName[0]':{
        required: 'Enter middle initial',
        lettersonly: 'Alphabetic characters only'
      },
      'age[0]':{
        required: 'Enter age',
        maxlength: 'Invalid age',
        min: 'Invalid age'
      }
    }
  });
  $('#nextLP').click(function() {
      if (lop.valid()){
          window.location.href = "";
        }
        return false;
      });

   $(document).on('click',"#delete", function () {
      var v= document.getElementById("detailz");
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
	 <script src="<?php echo base_url();?>vendors/switchery/dist/switchery.min.js"></script>

  </body>
</html>



 