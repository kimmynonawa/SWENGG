<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LSCS</title>

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
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>ORG NAME</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
          <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="ORG_Home.html"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                      <li><a href="ORG_AddGOSM.html">Add New GOSM</li>
                      <li><a href="ORG_PreAct.html">Pre-Activity Form</a></li>
                    </ul>
                  </li>
                  <li><a href="ORG_Calendar.html"><i class="fa fa-table"></i> Calendar <span class="fa fa-chevron-down"></span></a>
                  <li><a href="ORG_GOSM.html"><i class="fa fa-list-alt"></i> GOSM <span class="fa fa-chevron-down"></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   La Sallian Computer Society
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
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
                  <h3>Application For Use Of Trademark</h3>
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
                <h4><p class="text-success"><b> Important Reminders: </b></p> <p class="text-success"> 1. Accomplish two (2) copies of this form for your office/organization and STRATCOM reference.</p> <p class="text-success"> 2. Attach a copy of the proposed design/layout of the merchandise/print material/video. </p> <p class="text-success"> 3. Allow five (5) days processing for the approval of the merchandise/print material/video. </p><p class="text-success"> 4. Strictly follow the approved duration and quantity for the use of trademark. </p> <p class="text-success">5. Check the remarks on the attachments. </p></h4>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form method="post" id = "formTrademark2" autocomplete="off">
                      <div class= "row" id="tmarks">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="row">
                            <div class="col-md-8">
                              <label class= "col-md-5"> <h4>Trademark To Use:</h4> </label>
                              <div class= "form-group col-md-6">
                                <select class="select2_group form-control" name="tmChoice[]">
                                  <optgroup label="Logos / Design">
                                   <!--  <?php
                                      foreach ($trademarks as $trademark) { ?>
                                        <option value="<?php echo $trademark->idREF_TRADEMARKS; ?>"> <?php echo $trademark->name; ?></option>
                                    <?php }
                                    ?>   -->    
                                  </optgroup>
                                  <optgroup label="DLSU Labels">

                                  </optgroup>
                                  <optgroup label="DLSU taglines">
                                    
                                  </optgroup>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class= "row">
                        <div class= "col-md-8">
                          <label class="control-label col-md-5"></label>
                          <div class="col-md-6">
                            <div class = "buttons">
                                <button id="addtm" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                                <button id="deletetm" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                            </div>     
                          </div>
                        </div>
                      </div>
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Type of Item/Material To Produce</h4> </label>
                            <div class= "form-group col-md-6">
                              <select id="matToProduce" name="matToProduce" class="form-control col-md-7 col-xs-12">
                                <option disabled selected>Select Type</option>
                                <option> Merchandise</option>
                                <option> Multimedia/Web</option>
                                <option> Video</option>
                                <option> Poster/Flyer/Invite/Banner</option>
                                <option> Brochure/Publication</option>                 
                              </select>
                            </div>        
                        </div>
                      </div> 
                      
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Purpose Of Use</h4> </label>
                            <div class= "form-group col-md-6">
                              <textarea name= "trademarkUse" rows="2" class="form-control" placeholder="ex: Banner for the winners of a contest"></textarea> 
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Proposed Start Time</h4> </label>
                          <div class= "form-group col-md-6">
                            <input type="time" name= "startTime" id="startTime" class="form-control"/>
                          </div>
                          <label class= "col-md-5"> <h4>Proposed End Time</h4> </label>
                          <div class= "form-group col-md-6">
                            <input type="time" name= "endTime" id="endTime" class="form-control"/>
                          </div>          
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Activity Where Trademark Will Be Used</h4> </label>
                            <div class= "form-group col-md-6">
                              <select id="actType" name="actType" class="form-control col-md-7 col-xs-12" >
                                <option disabled selected>Select Type Of Activity</option>
                                <?php
                                  foreach ($activityTypes as $activity) { ?>
                                    <option value="<?php echo $activity->idREF_ACTIVITYTYPE; ?>"> <?php echo $activity->activityType; ?></option>
                                <?php }
                                ?>                
                              </select>
                          </div>    
                        </div>
                      </div> 

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Venue</h4> </label>
                            <div class= "form-group col-md-6">
                              <input type="text" name= "venue" class="form-control" placeholder="ex: Henry Sy Grounds" />
                          </div>    
                        </div>
                      </div> 



                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-11">
                          <input id="nextTrademark2" type="submit" class="btn btn-success align: right" value ="Next">
                        </div>
                      </div>
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.min.js"> </script>
    <script src="<?php echo base_url();?>js/validation.js"></script>
    <script src= "http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js" </script>

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
