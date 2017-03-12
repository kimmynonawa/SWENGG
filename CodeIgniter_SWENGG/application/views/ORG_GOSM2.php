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
                    <li><a href="http://localhost/index.php/account/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
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

            <div class="page-title">
              <div class="title_left">
                <h3>CSO Chart Details</h3>
              </div>
              </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <form action= "ORG_Home.html" method="post">
                    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_title">
                      <h2>ORGANIZATION NAME </h2> 
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                      </div>
              <div class="x_content">
              <span class="section">Activity Information</span>
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Activity Name: </label>
                  <p>Leadership Seminar</p>
                </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Goals: </label>
                            <p>To hone the officers' and Young Officers' skills in terms of leadership and public speaking</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Brief Description: </label>
                            <p>This is a leadership training for all the Young Officers and Officers of YES. This workshop</p>
                          </div>
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                            <p>aims to give YES' Officers insights on public speaking and leadership skills so that they can</p> 
                          </div>
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label> 
                            <p>apply it to their daily lives as an officer and as a person as well.</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Measures: </label>
                            <p>Attendance</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">GOSM Target Date: </label>
                            <p>November 04, 2016</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Time: </label>
                            <p>9:00am-11am</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Venue: </label>
                            <p>Y507</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Activity Nature: </label>
                            <p>Academic</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Activity Type: </label>
                            <p>Seminar/Workshops</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Related to: </label>
                            <p>R - 1</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Budget Breakdown: </label>
                            <p>P1000.00</p>
                          </div>
                          
                        
                        <span class="section">The Central Committee</span>
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Head/s: </label>
                            <p>Aldrich Opiniano (VP Human Resources), and Allene Quintana (AVP Training and Development)</p>
                          </div>
                          
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Young Executives: </label>
                            <p>"Young Executives"</p>
                          </div>
                          
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Internal Affairs Head/s: </label>
                            <p>"Internal Affairs"</p>
                          </div>
                          
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">External Affairs  Head/s: </label>
                            <p>"External Affairs"</p> 
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Human Resources Head/s: </label> 
                            <p>"Human Resources"</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Communications Head/s: </label>
                            <p>"Communications"</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Promotions Head/s: </label>
                            <p>"Promotions"</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Finance Head/s: </label>
                            <p>Ryan King</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Documentations Head/s: </label>
                            <p>Alex Espiritu</p>
                          </div>
                      
                          
                        <span class="section">Others</span>
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Photographers: </label>
                            <p>"Photographers"</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Videographers: </label>
                            <p>"Videographers"</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Host/s: </label>
                            <p>"Hosts"</p> 
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Speaker/s: </label> 
                            <p>"Speakers"</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Sponsor/s: </label>
                            <p>"Sponsors"</p>
                          </div>

                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Equipment Needed: </label>
                            <p>"Equipments"</p>
                          </div>
                          <br />
                          <br />
                        </div>
                      </div> <!-- end of inner col-md-12 col-sm-12 col-xs-12"-->
                          
                      
                      <button type="submit" class="btn btn-success col-md-offset-11" id="submit">NEXT</button>
        
              </div> <!-- END OF -ROW- DIV -->
              </form>
              </div>
            </div> <!-- END OF X PANEL -->
          </div> <!-- END OF col-md-12 col-sm-12 col-xs-12 -->
        </div> <!-- END OF ROW FINAL!!!!!!!! -->

            
        <!-- /page content -->
		
     <!-- jQuery -->
    <script src="<?php echo base_url();?>vendors/jquery/dist/jquery.min.js"></script>
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
