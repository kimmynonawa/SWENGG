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
              <h3>Special Permit for Campus Access
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
                <h4> <b> Important Reminders: </b>
                <ol>
                  <li> This form is used ONLY for requesting permission for ACCESS OF PERSONS into the campus.</li>
                  <li> This form will be accepted only within office hours (Mon to Fri: 8:00am to 12:00pm and 1:30pm to 5:00pm). </li>
                  <li> This form must be submitted at the Security Office (J108) no later than two (2) working days before the requested date of campus access (Saturday is not counted as a working day for this purpose).</li>
                  <li> This form is considered an application only unless a final decision is made and indicated on this form.</li>
                  <li>Clinics in campus are open only from 06:00am to 10:00pm, Mondays to Saturdays. </li>
                </ol>
                </h4>
            </div>
          </div>
                
          <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                     <form class="form-horizontal form-label-left" novalidate id="p_forms_controller" action="spca2" method="Post">
                      <span class="section"></span>
                    
						<?php if (isset($success)): ?>
						<h4>Successfully Added!</h4>
						<?php endif; ?>
					
					
                      <div class= "row">
                        <div class="col-md-12">   
                          <label class= "col-md-6"> <h4>List of Persons Covered By Special Permit</h4> </label>
                          <div class= "form-group col-md-12">
                            <table class="table table-striped">
                              <thead>
                                <tr> </tr>
                              </thead>
                              <tbody id="names">
                                <tr id ="details" class="details">
                                <td>  <input class="form-control" name="lName[]" placeholder ="Enter Last Name" /></td>
                                <td>  <input class="form-control" name="fName[]" placeholder ="Enter First Name" /></td>
                                <td>  <input class="form-control" name="mName[]" placeholder ="Enter Middle Name" /></td>
                                <td>  <input class="form-control" name="classification[]" placeholder ="Enter Classifcation" /></td>
                                <td>  <input class="form-control" name="email[]" placeholder ="Enter Email" /></td>
                                <td>  <input class="form-control" name="mNum[]" placeholder ="Enter Mobile Number" /></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div class = "buttons col-md-12">
                          <div class="col-md-3">
                            <button id="addspca2" type ="button" class ="btn btn-default">  <span class="glyphicon glyphicon-plus-sign"></span> </button>
                            <button id="deletespca2" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                          </div>    
                        </div>
                      </div>  
                     
                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-11">
                          <input id="nextSpecialPermit2" type="submit" class="btn btn-success align: right" Value="Next">
                        </div>
                      </div>    
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>


	<script>
	function removeError(element)
	{
		element.addClass('valid')
						.closest('.form-group')
						.removeClass('has-error');
	}
	
		var spca2= $('#specialPermit2');
	spca2.validate({
		rules: {
			lName[]: {
				required:true,
				lettersonly: true
			},
			fName[]: {
				required:true,
				lettersonly: true
			},
			mName[]: {
				required:true,
				maxlength: 5,
				lettersonly: true
			},
			classification[]: {
				required: true
			},
			email[]: {
				required: true,
				email:true
			},
			mNum[]: {
				required: true,
				minlength:11,
				maxlength:11
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{

			lName[]: {
				required: 'Enter Last Name',
				lettersonly: 'Alphabetic characters only'
			},
			fName[]: {
				required: 'Enter First Name',
				lettersonly: 'Alphabetic characters only'
			},
			mName[]: {
				required: 'Enter Middle Name',
				lettersonly: 'Alphabetic characters only'
			},
			classification[]: {
				required: 'Enter Classification'
			},
			email[]: {
				required: 'Enter DLSU e-mail',
				email: 'Invalid e-mail'
			},
			mNum[]: {
				required: 'Enter Mobile Number',
				minlength: 'Mobile Number must be 11 digits',
				maxlength: 'Mobile Number must be 11 digits'
			}
			
		}
		});
	$('#nextSpecialPermit2').click(function() {
    	if (spca2.valid()){
        	window.location.href = "ORG_PreAct_SpecialPermitCampusAccess3.html";
        }
        return false;
   		});
   	$("#addspca2").click(function() {
      $("#names").append('<tr id ="detailss" class="details"> <<td>  <input class="form-control" name="lName" placeholder ="Enter Last Name" /></td><td>  <input class="form-control" name="fName" placeholder ="Enter First Name" /></td> <td>  <input class="form-control" name="mName" placeholder ="Enter Middle Name" /></td><td>  <input class="form-control" name="classification" placeholder ="Enter Classifcation" /></td><td>  <input class="form-control" name="email" placeholder ="Enter Email"/></td><td>  <input class="form-control" name="mNum" placeholder ="Enter Mobile Number"/></td></tr>');   
     });
    $("#deletespca2").click(function() {
      var v= document.getElementById("detailss");
      	v.remove();
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
