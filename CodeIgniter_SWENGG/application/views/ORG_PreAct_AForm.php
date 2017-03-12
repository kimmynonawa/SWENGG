<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo ($this->session->userdata('org')[0]['acronym']);?></title>

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

     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class= "x_panel">
              <div class= "row">
                <div class="title col-md-5">
                  <h3>Activity Approval Form</h3>
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
                    <form id="aform1" method="post" autocomplete="off">
                      <span class="section">General Information</span>

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Title Of Activity:</h4> </label>
                          <div class= "form-group col-md-6">
                              <input type="text" name= "actName" class="form-control" placeholder="ex:  General Assembly"/>
                          </div>        
                        </div>
                      </div> 

                      <!--IF ITS PART OF THE GOSM USE THIS
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Title Of Activity:</h4> </label>
                          <div class= "form-group col-md-6">
                              <select name= "actName" class="form-control"/>
                                <option>Annual General Assembly</option>
                              </select>
                          </div>        
                        </div>
                      </div> -->

                    <p> </p>
                    <span class="section">Nature of Activity</span>
                    <div class= "row">
                      <div class="col-md-8">   
                        <label class= "col-md-5"> <h4>CSO and Special Groups</h4> </label>
                          <div class= "form-group col-md-6">
                            <select id="cso" onchange ="disable(this.value)" class="form-control col-md-7 col-xs-12" name="CSOactOptions">
                              <option value = "0">Select Nature Of Activity</option>
                              <option value = "1"> Academic</option>
                              <option value = "2"> Special Interest</option>
                              <option value = "3"> Departmental Initiative</option>
                              <option value = "4"> Fundraising</option>
                              <option value = "5"> Community Development</option>
                              <option value = "6"> Organization Development</option>
                              <option value = "7">Issue Advocacy</option>
                              <option value = "8">Lasallian Formation/Spiritual Growth</option>
                              <option value = "9">Outreach</option>                   
                            </select>
                          </div>
                          <label class= "col-md-5"> <h4>USG</h4> </label>
                          <div class= "form-group col-md-6">
                            <select id="usg" onchange ="disable2(this.value)" class="form-control col-md-7 col-xs-12" name="USGactOptions">
                              <option  value = "0">Select Nature Of Activity</option>
                              <option value = "1"> Student Services</option>
                              <option value = "2"> Student Rights and Welfare</option>
                              <option value = "3"> Rules and Policies</option>
                              <option value = "4"> Fundraising</option>
                              <option value = "5"> Community Development</option>
                              <option value = "6"> Organization Development</option>
                              <option value = "7"> Issue Advocacy</option>
                              <option value = "8"> Lasallian Formation/Spiritual Growth</option>
                              <option value = "9">Outreach</option>                   
                            </select>
                          </div>                
                        </div>
                      </div>  
          
                      <p> </p>
                      <span class="section">Type of Activity</span>
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Through CSO or DAAM</h4> </label>
                          <div class= "form-group col-md-6">
                            <select id="cso2" onchange ="disable3(this.value)" class="form-control col-md-7 col-xs-12" name="CSOactType">
							  <option value = "0">Select Nature Of Activity</option>
                              <option value = "1"> Academic Contest</option>
                              <option value = "2"> Distribution</option>
                              <option value = "3"> General Assembly</option>
                              <option value = "4"> Seminar/Workshops</option>
                              <option value = "5"> Publicity/Awareness Campaign</option>
                              <option value = "6"> Meetings</option>
                              <option value = "7"> Spiritual Activity</option>
                              <option value = "8"> Recruitment/Audition</option>
                              <option value = "9"> Recreation</option>   
                            </select>
                          </div>
                          <label class= "col-md-5"> <h4>Through SLIFE</h4> </label>
                          <div class= "form-group col-md-6">  
                            <select id="usg2" onchange ="disable4(this.value)" name="USGactType" class="form-control col-md-7 col-xs-12" >
                             <option value = "0">Select Nature Of Activity</option>
                              <option value = "1"> Alliance with Outside Organizations</option>
                              <option value = "2"> Off-Campus Activities</option>
                              <option value = "3"> Seminar with Distinguished Speakers</option>
                              <option value = "4"> Conference involving Outside Participants</option>
                              <option value = "5"> Solicitations</option>
                              <option value = "6"> Fundraising</option>
                              <option value = "7">Donation Drive</option>
                                      
                            </select>
                          </div>                
                        </div>
                      </div>  
                      <p> </p>
                      <span class="section">Reach of Activity</span>
                      <div class= "row">
                        <div class="col-md-8">   
                        <label class= "col-md-5"> <h4>Through CSO or DAAM</h4> </label>
                          <div class= "form-group col-md-6">
                            <select id="reachType"  name="reachType" class="form-control col-md-7 col-xs-12">
                              <option disabled selected>Select Reach Of Activity</option>
                              <option value = "1"> College Wide</option>
                              <option value = "2"> University Wide</option>
                              <option value = "3"> Organization Wide</option>
                              <option value = "4"> Batch Wide</option>               
                            </select>
                          </div>      
                        </div>
                      </div> 

                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-11">
                          <input id="nextaform"  type="submit" "class="btn btn-success align: right" Value="Next">
                        </div>
                      </div>    
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>

    <!-- IMPORTANT IMPORTS -->
    <script src="js/jquery.min.js"></script>
    <script src= "js/jquery.validate.min.js"> </script>
    <script src= js/validation.js></script>
    <script src= "http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js" </script>
    <!-- IMPORTANT IMPORTS -->
    
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
	<script>
	  function disable(str)
  {
	  if(str == "1")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  if(str == "0")
	  {
		  document.getElementById("usg").disabled = false;
	  }
	 if(str == "2")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  if(str == "3")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  if(str == "4")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  if(str == "5")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  if(str == "6")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  if(str == "7")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  if(str == "8")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  if(str == "9")
	  {
		  document.getElementById("usg").disabled = true;
	  }
	  
  }
    function disable2(str)
  {
	  if(str == "1")
	  {
		  document.getElementById("cso").disabled = true;
	  }
	  if(str == "0")
	  {
		  document.getElementById("cso").disabled = false;
	  }
	 if(str == "2")
	  {
		  document.getElementById("cso").disabled = true;
	  }
	  if(str == "3")
	  {
		  document.getElementById("cso").disabled = true;
	  }
	  if(str == "4")
	  {
		  document.getElementById("cso").disabled = true;
	  }
	  if(str == "5")
	  {
		  document.getElementById("cso").disabled = true;
	  }
	  if(str == "6")
	  {
		  document.getElementById("cso").disabled = true;
	  }
	  if(str == "7")
	  {
		  document.getElementById("cso").disabled = true;
	  }
	  if(str == "8")
	  {
		  document.getElementById("cso").disabled = true;
	  }
	  if(str == "9")
	  {
		  document.getElementById("cso").disabled = true;
	  }
  }
	   function disable3(str)
  {
	  if(str == "1")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
	  if(str == "0")
	  {
		  document.getElementById("usg2").disabled = false;
	  }
	 if(str == "2")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
	  if(str == "3")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
	  if(str == "4")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
	  if(str == "5")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
	  if(str == "6")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
	  if(str == "7")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
	  if(str == "8")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
	  if(str == "9")
	  {
		  document.getElementById("usg2").disabled = true;
	  }
  }
	  
	   function disable4(str)
  {
	  if(str == "1")
	  {
		  document.getElementById("cso2").disabled = true;
	  }
	  if(str == "0")
	  {
		  document.getElementById("cso2").disabled = false;
	  }
	 if(str == "2")
	  {
		  document.getElementById("cso2").disabled = true;
	  }
	  if(str == "3")
	  {
		  document.getElementById("cso2").disabled = true;
	  }
	  if(str == "4")
	  {
		  document.getElementById("cso2").disabled = true;
	  }
	  if(str == "5")
	  {
		  document.getElementById("cso2").disabled = true;
	  }
	  if(str == "6")
	  {
		  document.getElementById("cso2").disabled = true;
	  }
	  if(str == "7")
	  {
		  document.getElementById("cso2").disabled = true;
	  }  
  }
 
	</script>
	<script>
	var aform1= $('#aform1');
	aform1.validate({
		rules: {
			reachType: {
				required:true
			}
		},

		messages:{
			
			reachType: {
				required: 'Pick reach of activity'
			}	
		}
	});
	$('#nextaform').click(function() {
    	if (aform1.valid()){
        	window.location.href = 'ORG_PreAct_AForm2";
        }
        return false;
   	});
	
	</script>
	
  </body>
</html>
