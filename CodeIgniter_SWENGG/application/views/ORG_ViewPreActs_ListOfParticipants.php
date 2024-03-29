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
                                    <?php
								    if($aformexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/viewaform"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'A-Form';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($pprexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/view_ppr"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'PPR';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($changeexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/viewCAD"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Activity Details Changes';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($lopexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/viewLOP"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'List of Participants';
										echo '</td><tr>';
                                    
									}
									?>
									
									
                                    <?php
								    if($contestexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/view_contest_mechanics"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Contest Mechanics';
										echo '</td><tr>';
                                    
									}
									?>
									
                                    <?php
								    if($foodexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/view_food_permit"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Food Permit';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($trademarkexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/view_trademark_use"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Trademark Use';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($minorpubexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/ORGminorPubView"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Minor Publication Proposal';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($sasexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/ORGsasview"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Special Approval Slip';
										echo '</td><tr>';
                                    
									}
									?>
									
									<?php
								    if($spcaexists>0)
									{
										echo '<tr style="background-color:#e9e4e4;"><td align="center">';
										echo '<a href="http://localhost/index.php/ViewPreActs/ORGspcaview"><button style="background-color:#e9e4e4;border:none;color:black;">';
										echo 'Special Permit Campus Access';
										echo '</td><tr>';
                                    
									}
									?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <span class="section">Activity Details</span>
                             <div class="item form-group">
                                <label class="control-label col-md-3">Date Created:</label>
                                <p> 
								<?php 
									$fromdate = $aform[0]['datecreated'];
									$fromdatenew = strtotime($fromdate);
									$formatted_fromdate = date('F d, Y H:i:s', $fromdatenew);
									echo $formatted_fromdate;?></p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Activity Title:</label>
                                <p><?php echo $aform[0]['title']?> </p>
                            </div>   
							
							<?php for ($i =0; $i<count($aformdate); $i++):?>
                            <div class="item form-group">
                                <label class="control-label col-md-3">Date and Time :</label>
                                <p><?php 
									$fromdate = $aformdate[$i]['startdate'];
									$fromdatenew = strtotime($fromdate);
									$formatted_fromdate = date('F d, Y', $fromdatenew);
									echo $formatted_fromdate;
									if($aformdate[$i]['enddate'] != Null){
										echo " - ";
										$fromdate = $aformdate[$i]['enddate'];
										$fromdatenew = strtotime($fromdate);
										$formatted_fromdate = date('F d, Y', $fromdatenew);
										echo $formatted_fromdate;
									}
									?>  </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3"></label>
                                <p> <?php echo $aformdate[$i]['starttime']?> - <?php echo $aformdate[$i]['endtime']?></p>
                            </div> 
							<?php endfor;?>
							
                            <div class="item form-group">
                                <label class="control-label col-md-3">Venue:</label>
                                <p> <?php echo $aform[0]['venue']?></p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">ENMP:</label>
                                <p> <?php echo $aform[0]['ENMP']?> </p>
                            </div> 
							
                            <span class="section">Participants with Waiver</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center"> ID Number </div></th>
                                <th><div align="center">Last Name</div></th>
                                <th><div align="center">First Name</div></th>
                                <th><div align="center">Middle Initial</div></th>
                                <th><div align="center">Age</div></th>
                                <th><div align="center">With Waiver</div></th>
                            </thead>
                            <tbody>
							<?php for ($i =0; $i<count($lopdetails1); $i++):?>
                                <tr>
                                    <td width="20%" align="center"><?php echo $lopdetails1[$i]['IDno']?></td>
                                    <td width="20%" align="center"><?php echo $lopdetails1[$i]['lastname']?></td>
                                    <td width="20%" align="center"><?php echo $lopdetails1[$i]['firstname']?></td>
                                    <td width="20%" align="center"><?php echo $lopdetails1[$i]['middleinitial']?></td>
                                    <td width="20%" align="center"><?php echo $lopdetails1[$i]['age']?></td>
                                    <td width="20%" align="center"><?php if($lopdetails1[$i]['waiver'] == 1) {echo 'yes';} else echo 'no'; ?></td>
                                </tr>
							<?php endfor;?>
                            </tbody>
                            </table>
							
							 <span class="section">Participants without Waiver</span>
                            <table class="table table-hover">
                            <thead>
                                <th><div align="center"> ID Number </div></th>
                                <th><div align="center">Last Name</div></th>
                                <th><div align="center">First Name</div></th>
                                <th><div align="center">Middle Initial</div></th>
                                <th><div align="center">Age</div></th>
                                <th><div align="center">With Waiver</div></th>
                            </thead>
                            <tbody>
							<?php for ($i =0; $i<count($lopdetails2); $i++):?>
                                <tr>
                                    <td width="20%" align="center"><?php echo $lopdetails2[$i]['IDno']?></td>
                                    <td width="20%" align="center"><?php echo $lopdetails2[$i]['lastname']?></td>
                                    <td width="20%" align="center"><?php echo $lopdetails2[$i]['firstname']?></td>
                                    <td width="20%" align="center"><?php echo $lopdetails2[$i]['middleinitial']?></td>
                                    <td width="20%" align="center"><?php echo $lopdetails2[$i]['age']?></td>
                                    <td width="20%" align="center"><?php if($lopdetails2[$i]['waiver'] == 1) {echo 'yes';} else echo 'no'; ?></td>
                                </tr>
							<?php endfor;?>
                            </tbody>
                            </table>
                        </div>
                    </div>
					<li ><a href="http://localhost/index.php/DownloadPreacts/lop">View Printable Form</a></li>
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
