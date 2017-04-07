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
                                <p> date</p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Activity Title:</label>
                                <p> <?php echo $activityDetails[0]['title']; ?> </p>
                            </div>  
                            <div class="item form-group">
                                <label class="control-label col-md-3">Nature of Activity:</label>
                                <p> <?php echo $activityDetails[0]['activitynature']; ?> </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Type of Activity:</label>
                                <p> <?php echo $activityDetails[0]['activitytype']; ?> </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Reach of Activity:</label>
                                <p> <?php echo $activityDetails[0]['activityreach']; ?> </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Date:</label>
                                <p> March 20, 2016 </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Time:</label>
                                <p> <?php echo $activityDetails[0]['starttime']." - ".$activityDetails[0]['endtime']; ?></p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Venue:</label>
                                <p> <?php echo $activityDetails[0]['venue']; ?> </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">ENP:</label>
                                <p> <?php echo $activityDetails[0]['ENP']; ?> </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">ENMP:</label>
                                <p> <?php echo $activityDetails[0]['ENMP']; ?> </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Contact Details:</label>
                                <?php
                                    foreach($projectHeads as $projHead) { ?>
                                        <p> <?php echo $projHead['name']." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(".$projHead['contactnumber'].")"; ?> </p>
                                <?php }
                                ?>
                            </div> 
                            <span class="section">Objectives</span>
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 1</label>
                                <p> <?php echo $pprDetails['objective1']; ?> </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 2</label>
                                <p> <?php echo $pprDetails['objective2']; ?> </p>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3">Objective 3</label>
                                <p> <?php echo $pprDetails['objective3']; ?> </p>
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
                                <?php
                                    foreach ($programDesign as $design) { ?>
                                        <tr>
                                            <td width="20%" align="center"><?php echo $design['starttime']." - ".$design['endtime']; ?></td>
                                            <td width="20%" align="center"><?php echo $design['duration']; ?></td>
                                            <td width="20%" align="center"><?php echo $design['name']; ?></td>
                                            <td width="20%" align="center"><?php echo $design['description']; ?></td>
                                            <td width="20%" align="center"><?php echo $design['personincharge']; ?></td>
                                        </tr>
                                <?php 
                                    } //END FOREACH LOOP
                                ?>
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
                                <?php
                                    foreach($expenseBreakdown as $expense) { ?>
                                        <tr>
                                            <td width="20%" align="center"><?php echo $expense['material']; ?></td>
                                            <td width="20%" align="center"><?php echo $expense['quantity']; ?></td>
                                            <td width="20%" align="center"><?php echo $expense['unitcost']; ?></td>
                                            <td width="20%" align="center"><?php echo $expense['totalcost']; ?></td>
                                        </tr>
                                <?php }
                                ?>
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
                                <?php
                                    foreach($sourceFunds as $fund) { ?>
                                        <tr>
                                            <td width="20%" align="center"><?php echo $fund['orgfunds']; ?></td>
                                            <td width="20%" align="center"><?php echo $fund['participantsfee']; ?></td>
                                            <td width="20%" align="center"><?php echo $fund['others']; ?></td>
                                            <?php
                                                if ($fund['others'] > 0) {
                                                    echo "hi";
                                                }
                                            ?>
                                        </tr>
                                <?php }
                                ?>
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
                                <?php
                                    foreach($orgFunds as $fund) { ?>
                                        <tr>
                                            <td width="20%" align="center"><?php echo $fund['operationalfunds']; ?></td>
                                            <td width="20%" align="center"><?php echo $fund['depositoryfunds']; ?></td>
                                            <td width="20%" align="center"><?php echo $fund['otherfunds']; ?></td>
                                            <td width="20%" align="center"><?php echo $fund['lessexpenses']; ?></td>
                                        </tr>
                                <?php }
                                ?>
                            </tbody>
                            </table>
                            <?php
                                if ( $activityDetails[0]['activitytypeID'] == 36) { ?>
                                    <span class="section">Projected Income</span>
                                    <table class="table table-hover">
                                    <thead>
                                        <th><div align="center">Item</div></th>
                                        <th><div align="center">Quantity</div></th>
                                        <th><div align="center">Selling Price</div></th>
                                        <th><div align="center">Amount</div></th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($projectedIncome as $income) { ?>
                                                <tr>
                                                    <td width="20%" align="center"><?php echo $income['item']; ?></td>
                                                    <td width="20%" align="center"><?php echo $income['quantity']; ?></td>
                                                    <td width="20%" align="center"><?php echo $income['sellingprice']; ?></td>
                                                    <td width="20%" align="center"><?php echo $income['quantity'] * $income['sellingprice']; ?></td>
                                                </tr>
                                        <?php } //END FOR EACH
                                        ?>
                                    </tbody>
                                    </table>
                            <?php
                                } // END IF
                            ?>
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
