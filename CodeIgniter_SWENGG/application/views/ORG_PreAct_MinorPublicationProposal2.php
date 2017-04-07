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
              <h3> Minor Publication Proposal
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
                <h4>The Minor publication proposal is accomplished whenever the organization create manuals, magazines and other forms of written publications. </h4>
            </div>
          </div>
                
          <div class="clearfix"></div>

		  
		  
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

				  <?php if (isset($success)): ?>
							<h4>Successfully Added!</h4>
						<?php endif; ?>
						
						<?php// echo validation_errors(); ?>
				  
                    <form class="form-horizontal form-label-left" id="p_forms_controller" action="minorpub_form2" method="Post">
                      <div class="row">
                          <span class="section">Publication Specifications</span>
                          <div class="col-md-8">
                                <div class="form-group col-md-3"> 
                                   <p> <input type="Number" name= "npages" class="form-control" id="nump" placeholder="ex: 100 Pages" /></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-6"> 
                                    <input type="text" name="bm1" class="form-control" id="nbmember" placeholder="ex: Juan Dela Cruz"  />
                                </div>         
                          </div>
                        </div> <!-- row -->
                    
					

                      <div class="row">
                        <div class="col-md-8">
                                <div class="form-group col-md-3"> 
                                   <p> <input type="Number" name="ssize" class="form-control" id="spreadsize" placeholder="ex: 15 Spread Size" /></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-6"> 
                                    <input type="text" name="bm2" class="form-control" id="spbmember" placeholder="ex: Juana Dela Paz" />
                                </div>     
                        </div>
                      
                      </div> <!-- row -->
                      
                       <div class="row">
                        <div class="col-md-8">
                                <div class="form-group col-md-3"> 
                                   <p> <input type="text" name="ptype" class="form-control" id="papertype" placeholder="ex: Magazine Paper" /></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-6"> 
                                 <input type="text" name= "bm3" class="form-control" id="ptbmember" placeholder="ex: Bob Marley" />
                                </div>     
                        </div>
                      </div> <!-- row -->

                         <div class="row">
                        <div class="col-md-8">
                                <div class="form-group col-md-3"> 
                                   <p> <input type="Number" name="ncolor" class="form-control" id="numcolor" placeholder="ex: 20 Colors" /></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-6"> 
                                    <input type="text" name="bm4" class="form-control" id="ncbmember" placeholder="ex: John Doe" />
                                </div>     
                        </div>
                      </div> <!-- row -->

                       <div class="row">
                        <div class="col-md-8">

                                <div class="form-group col-md-3"> 
                                   <p> <input type="Number" name="ncopies" class="form-control" id="numcopies" placeholder="ex: 1000 Copies" /></p>
                                </div>   
                                <!-- fix alignment -->
                                <div class="form-group col-md-6"> 
                                    <input type="text" name="bm5" class="form-control" id="ncpbmember" placeholder="ex: Jane Doe" />
                                </div>     
                        </div>
                      </div> <!-- row -->

                        <div class="ln_solid"></div> 
    
                        
                        <div class="form-group">
                          <div align="right">
                            <input type="submit" class="btn btn-success" value="Next" style="width: 80px">
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
