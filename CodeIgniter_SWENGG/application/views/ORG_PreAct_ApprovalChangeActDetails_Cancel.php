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
              <h3> Approval in Changes of Activity Details
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
              <h4> <p>The Approval in Changes of Activity Details should be completed only if the Pre-Activity requirements are already approved.</p></h4>
            </div>
          </div>
                
            <div class="clearfix"></div>
			<?php var_dump ($preactinfo);?> <br></br>
			<?php var_dump ($datetime);?> 
		
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form  id = "approvalChanges" autocomplete="off" action="changActDetailsCancel" method="post">
                     <span class="section"></span>
                      
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Title Of Activity</h4> </label>
                            <div class= "form-group col-md-6">
                              <label  name= "actTitle" class="form-control"> <?php echo $preactinfo[0]['title'];?> </label>
                            </div>        
                        </div>
                      </div>

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Type of Activity</h4> </label>
                          <div class= "form-group col-md-6">                  
                            <label id="actType" name="actType" class="form-control col-md-7 col-xs-12" > <?php echo $preactinfo[0]['activitytype'];?> </label>
                              
                          </div>    
                        </div>
                      </div>
					
					<?php for ($i =0; $i<count($datetime); $i++):?>
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Date</h4> </label>
                            <div class= "form-inline col-md-6">
                              <label  name= "startTime" id="startTime" class="form-control" style="width:154px" />
									<?php 
									$fromdate = $datetime[$i]['startdate'];
									$fromdatenew = strtotime($fromdate);
									$formatted_fromdate = date('F d, Y', $fromdatenew);
									echo $formatted_fromdate;?> 
							  </label> - 
								<label  name= "endTime" id="endTime"  class="form-control" style="width:154px"> 
									<?php 
									if ($datetime[$i]['enddate'] != Null){
										$todate = $datetime[$i]['enddate'];
										$todatenew = strtotime($todate);
										$formatted_todate = date('F d, Y', $todatenew);
										echo $formatted_todate;
									}?>
								</label>
                            </div>        
                        </div>
                      </div>
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Time</h4> </label>
                          <div class= "form-inline col-md-6">
                            <label  name= "startTime" id="startTime" class="form-control" style="width:154px" />
								<?php echo $datetime[$i]['starttime'];?> 
							</label> - 
                            <label  name= "endTime" id="endTime"  class="form-control" style="width:154px">
								<?php echo $datetime[$i]['endtime'];?> 
							</label>
                          </div>    
                        </div>
                      </div> 
					<?php endfor;?>
					
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Venue</h4> </label>
                            <div class= "form-group col-md-6">
                              <label type="text" name= "venue" class="form-control"><?php echo $preactinfo[0]['venue'];?>  </label>
                            </div>        
                        </div>
                      </div>  
                      
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Changes</h4> </label>
                          <div class= "form-group col-md-6">                  
                            <label id="actType" name="actType" class="form-control col-md-7 col-xs-12"> Cancellation </label>
                          </div>                        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Justification/Reason </h4> </label>
                            <div class= "form-group col-md-6">
                              <textarea name= "reason" rows="4" class="form-control" placeholder="The facilitator of the recollection is not available."></textarea> 
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Requested By:</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "requestName" class="form-control" placeholder="Juan Dela Cruz" />
                            </div>        
                        </div>
                      </div>  

                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div align="right">
                          <input type="submit" class="btn btn-success" value ="Next" style="width: 80px">
                          
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
    jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z\s]+$/i.test(value);
    });
    
    function removeError(element)
    {
      element.addClass('valid')
              .closest('.form-group')
              .removeClass('has-error');
    }
    
     var approvalchange= $('#approvalChanges');
    approvalchange.validate({
      rules: {
        actTitle:{
          required:true
        },
        actType: {
          required: true
        },

        date: {
          required: true,
        },

        startTime: {
          required:true 
        },      
        
        endTime: {
          required: true
        },
        
        venue: {
          required: true
        },
        reason: {
          required:true
        },
        requestName:{ 
          required:true,
          lettersonly:true
        }
      },
      highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
      },
      success: removeError,

      messages: {
        actTitle:{
          required: 'Enter activity title'
        },
        actType: {
          required: 'Pick activity type'
        },

        date: {
          required: 'Enter date'
        },

        startTime: {
          required: 'Enter time'
        },      
        
        endTime: {
          required: 'Enter time'
        },
        
        venue: {
          required: 'Enter venue'
        },
        reason: {
          required: 'Enter Justification'
        },
        requestName:{ 
          required: 'Enter name',
          lettersonly: 'Alphabetic characters only'
        }
      }
      });


      $('#nextApproveChanges').click(function(){
          if (approvalchange.valid()){
             window.location.href = "";
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
