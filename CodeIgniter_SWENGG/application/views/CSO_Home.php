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
                <img src="<?php echo base_url();?>images/cso2.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo ($this->session->userdata('org')[0]['acronym']);?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
				  <li><a href="http://localhost/index.php/account/cso"><i class="fa fa-home"></i> Home <span ></span></a></li>
                  <li><a href="http://localhost/index.php/org/add"><i class="fa fa-table"></i> Add New Organization <span ></span></a></li>
				  <li><a href="#"><i class="fa fa-calendar"></i> Calendar <span ></span></a></li>
				  <li><a href="http://localhost/index.php/gosm/viewCSOGosm1"><i class="fa fa-list-alt"></i> GOSM <span ></span></a></li>
				  <li><a href="#"><i class="fa fa-list-alt"></i> PreActs <span ></span></a></li>				  
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

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   <?php echo ($this->session->userdata('org')[0]['name']);?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="http://localhost/index.php/account/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
				<!--NOTIF-->
                <li role="presentation" class="dropdown">
                  <a id="but" href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <div id="num">
						
					</div>
                  </a>
                  <ul name="notif" id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu" style="width: 300px; height: 200px; overflow: auto">
					<!--NOTIFICATION HERE-->
                  </ul>
				  <!--NOTIF-->
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

       <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
				
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Top 10 Orgs with the most number of Pre-Acts</h3>
                  </div>
                </div>
				
				<canvas id="myChart" width="70" height="20"></canvas>
					
				<script>
				var ctx = document.getElementById("myChart");
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: [<?php 
									for ($i = 0; $i<count($preacts);$i++){
										echo '"'; echo "{$preacts[$i]['name']}"; echo '",';
									}
										
								?>],
						datasets: [{
							label: 'Number of PreActs',
							data: [<?php 
							
									for ($i = 0; $i<count($preacts);$i++){
										echo '"'; echo "{$preacts[$i]['numpreacts']}"; echo '",';
									}
										
								  ?>],
							backgroundColor: [
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)',
								'rgba(0, 150, 0, 0.6)'
							]
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
				</script>
                
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12" style="width:550px">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Recent Activities Of Organizations</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                <a><b>YES: </b>Pre-Acts for Officer Training</a>
                            </h2>
                            <div class="byline">
                              <span>13 hours ago</span> 
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                              <a><b>MAFIA: </b>Pre-Acts for General Assembly</a>
                            </h2>
                            <div class="byline">
                              <span>13 hours ago</span> 
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                <a><b>LSCS: </b>Pre-Acts for Medical Mission&nbsp;</a>
                            </h2>
                            <div class="byline">
                              <span>2 days ago</span>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                <a><b>BMS: </b>Pre-Acts for Medical Mission&nbsp;</a>
                            </h2>
                            <div class="byline">
                              <span>2 days ago</span>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                <a><b>YES: </b>Pre-Acts for Medical Mission&nbsp;</a>
                            </h2>
                            <div class="byline">
                              <span>2 days ago</span>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                              <a><b>LSCS: </b>GOSM for Term 3 AY 2016-2017</a>
                            </h2>
                            <div class="byline">
                              <span>7 days ago</span> 
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
               <!-- Start to do list -->
                <div class="col-md-6 col-sm-6 col-xs-12" style="width:549px">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Upcoming Activities For the Week</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> <b>YES</b> Team Building </p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> <b>MAFIA</b> General Assembly</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> <b>BMS</b> Recollection</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> <b>LSCS </b>Contest</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> <b>ENGLICOM</b> Officer Training</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> <b>YES </b>Feeding Program</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"><b> AMSTUD </b>Food Fest</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"><b> ESA </b>Sports Fest</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> <b>PHYSOC </b>Medical Mission</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
	<script src= "<?php echo base_url();?>js/jquery.min.js"></script>
	<script>
		var interval = 5000;
		get();
		
		$.ajax({
			type: 'POST',
			url: 'http://localhost/index.php/Notif/getall',					
			success: function (data) {
				$('#menu1').empty();
				for (i = 0; i < data.length; i++){
					$('#menu1').prepend('<li></span><span><b>'+data[i].orgname+'</b> added a new GOSM</span><br><span class="time">'+data[i].title+'<br>'+data[i].created+'</span><span></li>');
				}
			}
		});
		
		function get() {
			$.ajax({
				type: 'POST',
				url: 'http://localhost/index.php/Notif/getnew',					
				success: function (data) {
					
						$('#num').empty();
						if(data.length != 0){
							$('#num').append('<span class="badge bg-green">'+ data.length +'</span>');
							for (i = 0; i < data.length; i++){
								$('#menu1').prepend('<li style="background-color:#ccffcc;"></span><span><b>'+data[i].orgname+'</b> added a new GOSM</span><br><span class="time">'+data[i].title+'<br>'+data[i].created+'</span><span></li>');
							}
						}
						
				}
			});
		}
		
		$('#but').on('click',function(){
			$.ajax({
				type: 'POST',
				url: 'http://localhost/index.php/Notif/setseen',					
				success: function (data) {
					$('#num').empty();
				}
			});
		});
		
		setInterval(get, interval);
	</script>

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
