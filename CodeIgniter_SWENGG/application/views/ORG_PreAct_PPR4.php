<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LSCS</title>

    <script src= "<?php echo base_url();?>js/jquery.js"> </script>
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
    <!-- jQuery -->
    <script src="<?php echo base_url();?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.min.js"> </script>

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

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Project Proposal</h3>
              </div>
            </div>
            <div class="clearfix"></div>
                        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <form class="form-inline form-label-left" id="pprform41" method="post">
                      <span class="section">Source of Funds</span>
                        <div class="tbl table-responsive">          
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th align="center">Source/s of Funds</th>
                                <th align="center">Amount</th>
                              </tr>
                            </thead>
                            <tbody id="tr">
                              <tr>
                                <td><h4>Organizational Funds</h4></td>
                                <td> <input type="Number" name="orgFunds" class="form-control" id="of" placeholder="Enter Amount"/></td>
                              </tr>
                              <tr>
                                <td><h4>Participants Fee</h4></td>
                                <td> <input type="Number" name="participantsFee" class="form-control" id="pf" placeholder="Enter Amount"/></td>
                              </tr>
                              <tr id="others"> <!-- append in js --> </tr>
                            </tbody>

                            <tbody>
                              <tr  style= "background-color:#D3D3D3">
                                <td></td>
                                <td align="left" ><h4>Total:</h4></td>
                              </tr>
                              </tbody>
                           </table>
                          </div>

                          <div class= "row">
                               <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                                   <button id="addc4" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span></button>
                                  <button id="remc4" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                               </div>
                          </div>

                          <div class="ln_solid"></div>
                          <span class="section">Organizational Funds</span>

                         <div class="tbl table-responsive">          
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody id="tr">
                              <tr>
                                <td> <h4>Accumulated Operational Funds</h4> </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td align="right"><h4>Operational Funds</h4></td>
                                 <td> <input type="Number" name="operationalFundsAmount"class="form-control" id="operationalFundsAmount" placeholder="Enter Amount"/></td>
                              </tr>
                              <tr>
                                <td> <h4>Accumulated Depository Funds</h4> </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td align="right"><h4>Depository Funds as of</h4></td>
                                <td> 
                                    <input type="date" name="depositoryDate" class="form-control" id="dpf"/>
                                    <input type="Number" name= "depositoryAmount" class="form-control" id="depositoryAmount" placeholder="Enter Amount"/>
                                </td>
                              </tr>
                                <tr>
                                <td> <h4>Other Sources of Funds (should match with Section 6, if applicable)</h4> </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td align="right"><h4>Participants Fee/Donation/Sponsorship</h4></td>
                                <td><input type="Number" name= "donSporFunds" class="form-control" id="donSporFunds" placeholder="Enter Amount"/></td>
                              </tr>
                              <tr>
                                <td align="right" style= "background-color:#D3D3D3"><h4>Total Cash for Disbursement:</h4></td>
                                <td style= "background-color:#D3D3D3"><h4> 315,869.00</h4></td>
                              </tr>

                              <tr>
                                <td><h4>Less: Total Projected Expenses: </h4></td>
                                 <td><h4>5,000.00</h4></td>
                              </tr>

                              <tr>
                                <td align="right" style="background-color:#D3D3D3"><h4>Remaining Balance: </h4></td>
                                <td style="background-color:#D3D3D3"><h4>310,869.00</h4></td>
                              </tr>
                            </tbody>
                           </table>
                          </div>
                          <div class="ln_solid"></div>
                          <div class="row">
                                <div class="col-sm-offset-11 col-sm-1">
                                  <input id="nextbppr4" type="submit" class="btn btn-success align: right" value="Next">
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

    <!-- SCRIPT FOR VALIDATION AND ROW ADDING -->
    <script type="text/javascript">
      $(function() {
       jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z\s]+$/i.test(value);
  })

  function removeError(element){
  element.addClass('valid')
      .closest('.tbl')
      .removeClass('has-error');
  }

  var pprform41= $('#pprform41');
  var numberIncr = 0;
  $("#others").append('<td><input type="text" class="snm form-control" name="sourcename[' + numberIncr + ']" placeholder="Other Source"/></td> <td> <input class="smt form-control"  name="sourceamount[' + numberIncr + ']"  placeholder="Enter Amount"/></td>');   
    $("#addc4").click(function(){
      numberIncr++;
       $("#tr").append('<tr id="newtr"><td><input type="text" class="snm form-control" name="sourcename[' + numberIncr + ']" placeholder="Other Source"/></td> <td> <input class="smt form-control"  name="sourceamount[' + numberIncr + ']"  placeholder="Enter Amount"/></td></tr>');   

       $(".snm").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter source'
      }
    });
      });

      $(".smt").each(function(){
        $(this).rules( "add", {
        required: true,

      messages: {
        required: 'Enter Amount'
      }
    });

     });

   });

  pprform41.validate({
    rules: {
      'sourcename[0]' : "required",
      'sourceamount[0]' : "required",
            orgFunds:"required",
            participantsFee: "required",
            depositoryAmount: "required",
            operationalFundsAmount:"required",
            depositoryDate: "required",
            donSporFunds:"required"

    },
    highlight: function(element){ $(element).closest('.tbl').removeClass('has-success').addClass('has-error'); 
    },
    success: removeError,

    messages: {
      'sourcename[0]' : {
        required: 'Enter source'
      },
      'sourceamount[0]' : {
        required: 'Enter source'
      },
      orgFunds: {
              required: 'Enter amount'
            },

            participantsFee:{
              required: 'Enter amount'
            },
            operationalFundsAmount: {
              required: 'Enter amount'
            },

            depositoryAmount: {
              required: 'Enter amount'
            },

            depositoryDate:{
              required: 'Enter date'
            },

            donSporFunds:{
              required: 'Enter amount'
            }
    }
    });    

    $("#remc4").click(function(){
       var v= document.getElementById("newtr");
       v.remove();
      });
  // $('#nextbppr4').click(function(){
  //    if (pprform41.valid()){
  //      window.location.href = "ORG_PreAct_PPR5.html"; // next page
  //     }
  //     return false;
  //    });

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
