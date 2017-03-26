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

          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form method="post" id = "approvalChanges" autocomplete="off">
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
                        <div class="col-md-10">   
                          <label class= "col-md-4"> <h4>Changes</h4></label>
                            <div class= "form-group col-md-4">
                              <select name="changes" id="changes" class="form-control col-md-7 col-xs-12">
                                <option disabled selected>Select Changes</option>
                                <option value="1"> Venue</option>
                                <option value="2"> Date and Time</option>
                                <option value="3"> Program Design</option>
                                <option value="4"> Cancellation</option>             
                              </select>
                            </div>
                            <div class="col-md-2">
                              <button class="form-control" id="select">Select Change</button>
                            </div>        
                          </div> 
                      </div>  
                      <div id="changeDetails"> </div>
                      <div id="dateDetails"></div>

                      <div class= "row">
                        <div class="col-md-10">   
                          <label class= "col-md-4"> <h4>Justification/Reason </h4> </label>
                            <div class= "form-group col-md-4">
                              <textarea name= "reason" rows="4" class="form-control" placeholder="The facilitator of the recollection is not available."></textarea> 
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-10">   
                          <label class= "col-md-4"> <h4>Requested By:</h4> </label>
                            <div class= "form-group col-md-4">
                              <input type="text" name= "requestName" class="form-control" placeholder="Juan Dela Cruz" />
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
    
   
  <script>

   $(document).ready(function () {
      $('#select').click(function(){
        console.log("yay");
        var choice = document.getElementById("changes").value;
        console.log("choice" + choice);
        if(choice==1){
          var toAppend='<div class="details"> <div class= "row"><div class="col-md-10"> <label class= "col-md-4"> <h4>Venue</h4> </label><div class= "form-group col-md-4"><input type="text" name= "newvenue" class="form-control" placeholder="ex: Henry Sy Grounds"></div> <div class="col-md-2"><button class="form-control btn btn-danger" id="rVenue" name="rVenue"> Remove Venue</button></div></div></div></div>';
           event.preventDefault();
          $('#changeDetails').append(toAppend);

          $(document).on("click", "#rDate", function(){
            (this).closest(".details").remove();
          });
        }
        else if(choice==2){
          //date and time
          var toAppend='<div class= "row"> <div class="col-md-10">   <label class= "col-md-4"> <h4></h4></label><div class= "form-group col-md-4"><select name ="selectDate" id ="selectDate" class="form-control"> <option disabled selected> Select Kind Of Date </option><option value = "11"> Single Date</option><option value = "22"> Date Range with the same time slot</option></select></div><div class="col-md-2"><button class="form-control" id="dateOption" > Add Date</button></div></div></div>';
           event.preventDefault();
          $('#changeDetails').append(toAppend);


          $(document).on("click", "#rDate", function(){
            (this).closest(".details").remove();
          });

          $(document).on("click", "#dateOption", function(){
             var choice2 = document.getElementById("selectDate").value;
              if(choice2==11){
                event.preventDefault();
                $('#dateDetails').append('<p></p><div class="details"><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Date</h4></label></div> <div class= "form-group col-md-4"><input type="date" name="sDate[]" class= "form-control" /></div><div class="col-md-2"><button class="form-control btn btn-danger" id="rDate" name="rDate"> Remove Date</button></div></div></div> \
                    <div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Time</h4></label></div> <div class= "form-inline col-md-4"><input type="time" name= "s1Time[]" id="startTime" class="form-control" style="width:126px" /> - <input type="time" name= "e1Time[]" id="endTime"  class="form-control" style="width:127px"/></div></div></div> \
                    <div class="row" id ="time"> </div></div>');

                $(document).on("click", "#rDate", function(){
                  (this).closest(".details").remove();
                });
              }

              else if(choice2==22){
                 event.preventDefault();
                $('#dateDetails').append('<p></p><div class="details"><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Date</h4></label></div> <div class= "form-inline col-md-4"><input type="date" name= "drsDate[]" id="startDate" class="form-control" style="width:126px" /> - <input type="date" name= "dreDate[]" id="endDate" class="form-control" style="width:127px"/></div><div class="col-md-2"><button class="form-control btn btn-danger" id="rDate" name="rDate"> Remove Date</button></div></div></div> \
                    <div class="row" id ="time"> </div>\
                    <div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Time</h4></label></div> <div class= "form-inline col-md-4"><input type="time" name= "s2Time[]" id="startTime" class="form-control" style="width:126px" /> - <input type="time" name= "e2Time[]" id="endTime"  class="form-control" style="width:127px"/></div></div>');

                $(document).on("click", "#rDate", function(){
                  (this).closest(".details").remove();
                });
              }
          });

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
    <script src="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>build/js/custom.min.js"></script>
	
  </body>
</html>
