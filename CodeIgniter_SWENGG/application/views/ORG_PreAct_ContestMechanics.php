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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
            <div class="page-title">
              <div class="title_left">
                <h1>Contest Mechanics</h1>
              </div>

              </div>
            </div>
          

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                  
                      <form id ="mechanicsForm" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-3 col-xs-12">General Guidelines</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" rows="3" placeholder='Enter Guidelines' id = "guidelines"></textarea>
                        </div>
                      </div>
                       <!-- mechanics -->
                       <label class="control-label col-sm-2 col-sm-3 col-xs-12">Mechanics </label>
                      <div class="form-group main" id="main">
                        <div class="col-md-9 col-sm-9 col-xs-12" id="details">
                            <label class="control-label col-sm-2 col-sm-3 col-xs-12"></label>
                           <input class="form-control" id="mechanics" placeholder ="Enter rules of the contest" /> 
                        </div>
                      </div>
                      <div id= "addMech">
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                             <div class = "buttons">
                          <button id="add" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
                              
                        </div>
                      </div>
                      <!-- end of lmechanics -->

                     <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-3 col-xs-12">Criteria for Judging </label>
                        <table>
                          <tbody id="criteria" class="col-md-9 col-sm-9 col-xs-12">
                            <tr id= "criteria" class = "criteriaDetails">
                              <td> <input class="form-control" placeholder ="Enter Criteria" id="criteria" style ="width:625px"/> </td><td>  <input class="form-control" placeholder ="Enter Percentage" style ="width:150px" /></td>
                            </tr>
                          </tbody>
                         
                        </table>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                             <div class = "buttons">
                          <button id="add" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
                              
                        </div>
                      </div>
                      <!-- list of judges -->
                      <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-3 col-xs-12">List of Judges</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <input class="form-control" placeholder ="Enter Name" id="judges"/>
                              
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                             <div class = "buttons">
                          <button id="add" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
                              
                        </div>
                      </div>
                      <!-- end of list of judges -->

                      <!-- questions -->
                      <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-3 col-xs-12">Questions for Academic Contests</label> <!--hi devs!!! this will appear lang sana if the user chose academic contest -->
                        <div class="col-md-9 col-sm-9 col-xs-12"> 
                           <input class="form-control" placeholder ="Enter Questions" id="questions"/>
                              
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                             <div class = "buttons">
                          <button id="add" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                          <button id="delete" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                       </div>
                              
                        </div>
                      </div>
                      <!-- end of  questions-->

                    </form>
                    <br>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  <script>
        $(document).ready(function () {
            $("#add").click(function () {
                var det = document.getElementById('details'); 
                var cln = det.cloneNode(true);
                
                var ig = document.getElementById('main');

                ig.appendChild(cln);        
                console.log("yo!!!!");
                //var ctr = document.getElementsByClassName("details").length;
            })
            $("#delete").click(function () {
                var count = document.getElementsByClassName("details").length;
                var last = document.getElementsByClassName("details").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            })

             $("#mechanicsForm").validate({
              rules:{
                guidelines: {
                  required: true,
                  maxlength: 200

                },
                mechanics: {
                  required: true,
                  maxlength: 200

                },
                criteria: {
                  required: true,
                  maxlength: 200

                },
                judges: {
                  required: true,
                  maxlength: 100

                },
                questions: {
                  required: true,
                  maxlength: 100

                },
              success: removeError,
              messages: {
                guidelines: {
                  required: "Please enter the contest guidelines",
                  maxlength: "Input is too long."
                },
                mechanics: {
                  required: "Please enter the mechanics",
                  maxlength: "Input is too long."
                },
                criteria: {
                  required: "Please enter the criteria for judging",
                  maxlength: "Input is too long."
                },
                lN
                judges: {
                  required: "Please enter the name of the judge",
                  maxlength: "Input is too long."
                },
                lN
                questions: {
                  required: "Please enter a question",
                  maxlength: "Input is too long."
                },
               }
              }
            });
        })
    </script>
  </body>
</html>
