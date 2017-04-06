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
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.min.js"> </script>

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
              <h3> Project Proposal
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
                <h4>The Project Proposal contains the more comprehensive and detailed description of event that the organization is planning to have. </h4>
            </div>
          </div>
                
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <form class=" form-label-left" id="pprform5" method="post">
                        <div class="table-responsive form-group">
                          <span class="section">Projected Income</span>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Selling Price</th>
                                <th>Amount</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody id="income">
                              <tr id="incomeRow">
                                <td><input type="text" name= "incomeItem[0]" class="form-control" id="incomeItem" placeholder="Item name"/></td>
                                <td><input type="number" name="incomeQty[0]" class="form-control" id="incomeQty" placeholder="Quantity"/></td>
                                <td><input type="text" name= "incomeSellPrice[0]" class="form-control" id="incomeSellPrice" placeholder="Selling Price"/></td>
                                <td align="center"><h4>P750.00</b></td>
                              </tr>
                            </tbody>
                               <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                 <td><button id="addNewIncomeRow" type ="button" class ="btn btn-default" style="width:80px"> Add</button></td>  
                              </tr>
                          </table>
                        </div>
                          <br>
                          
                          
                          <div class="table-responsive form-group">
                            <span class="section">Less: Projected Expense</span>
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Item Name</th>
                                  <th>Quantity</th>
                                  <th>Selling Price</th>
                                  <th>Amount</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody id="expense">
                                <tr id="expenseRow">
                                  <td><input type="text" name= "expenseItem[0]" class="form-control" id="expenseItem" placeholder="Item name"/></td>
                                  <td><input type="number" name="expenseQty[0]" class="form-control" id="expenseQty" placeholder="Quantity"/></td>
                                  <td><input type="text" name= "expenseSellPrice[0]" class="form-control" id="expenseSellPrice" placeholder="Selling Price"/></td>
                                  <td align="center"><h4>P750.00</h4></td>
                                  <td></td>
                                </tr>
                              </tbody>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                 <td><button id="addNewExpenseRow" type ="button" class ="btn btn-default" style="width:80px">Add</button></td>  
                              </tr>
                             </table>
                          </div>

                          
                          <div class="col-sm-offset-10">
                            <table>
                              <thead>
                                <th></th>
                                <th></th>
                                <th align= "center"><h4><b>Total:</b></h4></th>   
                                <th></th>                           
                              </thead>
                            </table>
                          </div>



                       <div class="ln_solid"></div>
                        <div class="form-group col-md-offset-11">
                            <input id="submitPPR5" type="submit" class="btn btn-success"  value="Next" style="width:80px"><br><br>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    <!-- SCRIPT FOR VALIDATION AND ROW ADDING -->
      <script type="text/javascript">
      $(function(){

          var  numberIncr=1;
          function removeError(element){
          element.addClass('valid')
              .closest('.form-group')
              .removeClass('has-error');
          }

        $('#pprform5').validate({
          rules: {
            'incomeItem[0]':"required",
            'incomeQty[0]': "required",
            'incomeSellPrice[0]':"required",
            'expenseItem[0]':"required",
            'expenseQty[0]': "required",
            'expenseSellPrice[0]':"required",
          },
          highlight:function(element){
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
          },
          success: removeError,
              highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
          },
          success: removeError,

          messages: {
            'incomeItem[0]':   { required : 'Enter name'},
            'incomeQty[0]':   { required : 'Enter quantity'},
            'incomeSellPrice[0]':   { required : 'Enter price'},
            'expenseItem[0]':  { required : 'Enter name'},
            'expenseQty[0]':  { required : 'Enter quantity'},
            'expenseSellPrice[0]':  { required : 'Enter price'},
          }
        });

        $("#addNewIncomeRow").click(function() {
           numberIncr++;
          $("#income").append('<tr id="newIncomeRow"><td><input type="text" name= "incomeItem[' + numberIncr + ']" class="inci form-control" placeholder="Item name"/></td><td><input type="number" name="incomeQty[' + numberIncr + ']" class="incq form-control" placeholder="Quantity"/></td><td><input type="text" name= "incomeSellPrice[' + numberIncr + ']" class="isp form-control"  placeholder="Selling Price"/></td><td align="center"><h4> P750.00</h4></td>&nbsp;&nbsp;<td><button id="removeIncomeRow" type ="button" class="btn btn-danger">Remove</button></td></tr>');


            $(".inci").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter name'
          }
        });
          });

           $(".incq").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter quantity'
          }
        });
          });

          $(".isp").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter price'
          }
        });
          });
        });

          $(document).on('click',"#removeIncomeRow", function () {
          var v = document.getElementById("newIncomeRow");
          v.remove();
        });  

          var numberIncr1=1;
        $('#addNewExpenseRow').click(function() {
          numberIncr1++;
          $("#expense").append('<tr id="newExpenseRow"><td><input type="text" name= "expenseItem[' + numberIncr1 + ']" class="ince form-control" placeholder="Item name"/></td><td><input type="number" name="expenseQty[' + numberIncr1 + ']" class="incqe form-control"  placeholder="Quantity"/></td><td><input type="text" name= "expenseSellPrice[' + numberIncr1 + ']" class="ispe form-control" placeholder="Selling Price"/></td><td align="center"><h4> P750.00</h4></td><td><button id="removeExpenseRow" type ="button" class="btn btn-danger">Remove</button></td></tr>');

          $(".ince").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter name'
          }
        });
          });

           $(".incqe").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter quantity'
          }
        });
          });

          $(".ispe").each(function(){
            $(this).rules( "add", {
            required:true,
          messages: {
            required: 'Enter price'
          }
        });
          });
        });

        $(document).on('click',"#removeExpenseRow", function () {
          var v = document.getElementById("newExpenseRow");
          v.remove();
        })

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
