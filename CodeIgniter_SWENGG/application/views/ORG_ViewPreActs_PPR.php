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
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>View Project Proposal</h3>
                </div>
            </div>

            <div class="clearfix"></div>
     

            <div class="x_panel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <br><br>   
                            <table id="table" class="table table-striped table-bordered table-hover" style="width:300px">
                                <thead>
                                    <th><div align="center">Filled Out Requirements</div></th>
                                </thead>
                                <tbody>
                                    <tr> <td align="center"> Aform</td><tr>
                                    <tr> <td align="center"> PPR</td><tr>
                                    <tr> <td align="center"> Minor Pub</td><tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <span class="section">Activity Details</span>
                             <div class="item form-group">
                                <label class="control-label col-md-3">Date Created:</label>
                                <p> date</p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Activity Title:</label>
                                <p> ORG General Assembly </p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Nature of Activity:</label>
                                <p> nature </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Type of Activity:</label>
                                <p> type </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Reach of Activity:</label>
                                <p> type </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Date:</label>
                                <p> March 20, 2016 </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Time:</label>
                                <p> time</p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Venue:</label>
                                <p> venue</p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">ENP:</label>
                                <p> enp </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">ENMP:</label>
                                <p> enmp </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Contact Details:</label>
                                <p> enmp </p>
                            </div> 
                            <span class="section">Objectives</span>
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 1</label>
                                <p> obj1 </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 2</label>
                                <p> obj2 </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 3</label>
                                <p> obj3 </p>
                            </div> 
                            <span class="section">Comprehensive Program Design</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center"> Time</div></th>
                                <th><div align="center">Duration</div></th>
                                <th><div align="center">Activity</div></th>
                                <th><div align="center">Brief Description</div></th>
                                <th><div align="center">Person-In-Charge</div></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">this</td>
                                    <td width="20%" align="center">lol</td>
                                </tr>
                            </tbody>
                            </table>
                            <span class="section">Breakdown of Expenses</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center"> Materials</div></th>
                                <th><div align="center">Quantity</div></th>
                                <th><div align="center"> Unit Cost</div></th>
                                <th><div align="center">Total Cost</div></th>  
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">this</td>
                                </tr>
                            </tbody>
                            </table>
                                <span class="section">Source of Funds</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center">Organizational Funds</div></th>
                                <th><div align="center">Participants Fee</div></th>
                                <th><div align="center"> Other shit</div></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">this</td>
                                </tr>
                            </tbody>
                            </table>
                            <span class="section">Organizational Funds</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center"> Accumulated Operational Funds</div></th>
                                <th><div align="center">Accumulated Deposity Funds</div></th>
                                <th><div align="center">Other Sources of Funds</div></th>
                                <th><div align="center">Less: Total Projected Expenses</div></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">fuck</td>
                                </tr>
                            </tbody>
                            </table>
                            <span class="section">Projected Income</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center">Item</div></th>
                                <th><div align="center">Quantity</div></th>
                                <th><div align="center">Selling Price</div></th>
                                <th><div align="center">Amount</div></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="20%" align="center">yo</td>
                                    <td width="20%" align="center">sup</td>
                                    <td width="20%" align="center">fuck</td>
                                    <td width="20%" align="center">fuck</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
        </div> 
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
