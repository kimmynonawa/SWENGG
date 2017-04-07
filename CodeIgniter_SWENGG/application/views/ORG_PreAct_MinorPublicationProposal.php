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

                    <form class="form-horizontal form-label-left" id="p_forms_controller" action="minorpub_form" method="Post">
						        <span class="section">General Information</span>
						
        						<?php if (isset($success)): ?>
        							<h4>Successfully Added!</h4>
        						<?php endif; ?>
        						<?php //echo validation_errors(); ?>

                      <div class= "row">
                        <div class="form-group col-md-8">
                          <label class= "col-md-3"> <h4>Publication Name:</h4> </label>
                          <div class= "form-group col-md-6">            
                            <input type="text" class="form-control" id="pubname" name="pubname" placeholder="ex: Juan's Academic Life" />
                          </div>   
                        </div>    
                      </div>
                      
                      <div class="row">
                        <div class="form-group col-md-8">
                          <label class= "col-md-3"> <h4>Publication Type:</h4> </label>
                          <div class= "form-group col-md-6">            
                            <input type="text" class="form-control" id="pubname" name="pubtype" placeholder=" ex: Magazine" />
                          </div>      
                        </div>
                      </div>  
						 
						          <div class="row">
                        <div class="form-group col-md-8">
                          <label class= "col-md-3"> <h4>Publication Frequency:</h4> </label>
                          <div class= "form-group col-md-6">            
                            <input type="Number" class="form-control" id="pubfreq" name="pubfreq" placeholder="ex: 15 days" /> 
                          </div>  
                      </div>
                    </div>  
						 
						        <div class="row">
                      <div class="form-group col-md-8">
                        <label class= "col-md-3"> <h4>Estimated Cost:</h4> </label>
                        <div class= "form-group col-md-6">            
                          <input type="Number" class="form-control" id="pubcost" name="pubcost" min="1" step="0.5" placeholder="ex: 100.00" />
                        </div>  
                      </div>
                    </div> 

                    <div class="row">
                      <div class="col-md-8">   
                        <label class= "col-md-3"> <h4>Target Date:</h4> </label>
                        <div class= "form-group col-md-6">
                          <input type="date" name= "tdate" class="form-control" id="tdate" />
                        </div>        
                      </div>
                    </div> <!-- row -->
                      
                     <span class="section">Objectives</span>
                      
                       <div class="row">
                        <div class="col-md-8">                                     
                          <label class= "col-md-3"> <h4> Objective 1</h4> </label>
                            <div class="form-group col-md-6">
                              <textarea class="form-control" id="obj1" name="obj1" row="3" placeholder="ex: To provide opportunity to readers for self-expression in written form." /></textarea> <!--Revision by yani-->
                              <p></p>
                            </div>   
                        </div>
                        <div class="col-md-8">                                     
                          <label class= "col-md-3"> <h4> Objective 2</h4> </label>
                            <div class="form-group col-md-6">
                               <textarea class="form-control" id="obj1" name="obj2" row="3" placeholder="ex:  To develop in readers the literary taste and study habits." /></textarea> 
                              <p></p> <!--Revision by yani-->
                            </div>   
                        </div>
                        <div class="col-md-8">                                     
                          <label class= "col-md-3"> <h4> Objective 3</h4> </label>
                            <div class="form-group col-md-6">
                               <textarea class="form-control" id="obj1" name="obj3" row="3" placeholder="ex: To provide encouragement for and to stimulate worth-while activities." /></textarea> 
                              <p></p> <!--Revision by yani-->
                            </div>   
                        </div>
                      </div> <!-- row -->

                      <span class="section">Proposed Content</span> 
                      
                      <div class="row">
                        <div class="col-md-8">        
                            <label class= "col-md-3"> <h4> Proposed Content 1</h4> </label>
                            <div class="form-group col-md-6">
                              <textarea class="form-control" id="cont1" name="cont1" placeholder="ex: Table Contents"></textarea>
                              <p></p> <!--Revision by yani-->
                            </div>      
                        </div>
                        <div class="col-md-8">        
                            <label class= "col-md-3"> <h4> Proposed Content 2</h4> </label>
                            <div class="form-group col-md-6">
                              <textarea class="form-control" id="cont2" name="cont2" placeholder="ex: Articles on Academic Struggles of various DLSU students" /></textarea>
                              <p></p> <!--Revision by yani-->
                            </div>      
                        </div>
                        <div class="col-md-8">        
                            <label class= "col-md-3"> <h4> Proposed Content 3</h4> </label>
                            <div class="form-group col-md-6">
                              <textarea type="text" class="form-control" id="cont3" name="cont3" placeholder="ex: Articles on Academic Excellences of various DLSU students"> </textarea>
                              <p></p> <!--Revision by yani-->
                            </div>      
                        </div>
                      </div> <!-- row -->

                      <span class="section">Target Readers</span> 
                      <div class="row">
                        <div class="col-md-8">                           
                          <label class= "col-md-3"> <h4> Target Reader 1</h4> </label>
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="tread1" name="tread1" placeholder="ex: DLSU community" />
                            <p></p> <!--Revision by yani-->
                          </div>      
                        </div> 
                        <div class="col-md-8">                           
                          <label class= "col-md-3"> <h4> Target Reader 2</h4> </label>
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="tread2" name="tread2" placeholder="ex: Youth" />
                            <p></p> <!--Revision by yani-->
                          </div>      
                        </div> 
                        <div class="col-md-8">                           
                          <label class= "col-md-3"> <h4> Target Reader 3</h4> </label>
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="tread3" name="tread3" placeholder="ex: Students" />
                            <p></p> <!--Revision by yani-->
                          </div>      
                        </div>       
                      </div> <!-- row -->
                        </div> 
						          <div class="form-group">
                          <div align="right">
                            <input type="submit" class="btn btn-success" value ="Next" style="width:80px">
                          </div>
                        </div>

                       </form>      
                      </div>
                  </div>
                </div> 
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

	<script>
	
	var pubform= $('#pubform');
	pubform.validate({
		rules: {
			pubname: "required",
			
			pubtype: "required",
			
			pubfreq: {
				required: true,
				number: true,
				minlength: 1

			},

			pubcost:{
				required: true,
				number: true,
				minlength:1
			},

			tdate: "required",

			obj1: "required",

			obj2: "required",

			obj3: "required",

			cont1: "required",

			cont2: "required",
			
			cont3: "required",

			tread1: "required",

			tread2: "required",

			tread3: "required"

			},

		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			pubname: {
				required: 'Enter publication name'
			},

			pubtype:{
				required: 'Enter publication type'
			},

			pubfreq: {
				required:'Enter frequency of publication',
				number:  'Invalid frequency',
				minlength: 'Invalid frequency'
			},

			pubcost:{
				required: 'Pick estimated publication cost',
				number: 'Invalid cost'
			},

			tdate:{
				required: 'Pick publication date'
			},

			obj1: {
				required: 'Enter objective'
			},

			obj2: {
				required: 'Enter objective'
			},

			obj3: {
				required: 'Enter objective'
			},

			cont1: {
				required: 'Enter publication content'
			},

			cont2: {
				required: 'Enter publication content'
			},

			cont3: {
				required: 'Enter publication content'
			},

			tread1: {
				required: 'Enter reader of the publication'
			},

			tread2: {
				required: 'Enter reader of the publication'
			},

			tread3: {
				required: 'Enter reader of the publication'
			},

		}

		});
	$('#nextpub').click(function(){
      if (pubform.valid()){
         window.location.href = "ORG_PreAct_MinorPublicationProposal2.html";
       }
       return false;
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
