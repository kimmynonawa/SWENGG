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
          <div class= "infoPanel">
            <div class="infoHead" data-toggle="collapse" href="#info">
              <h3> Project Proposal
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
                <h4>The Project Proposal contains the more comprehensive and detailed description of event that the organization is planning to have. <b> REMINDER: </b> Enter <b> NA </b>as the unit cost if there are no expenses incurred.  </h4>
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
                                <td> <input type="text" name="orgFunds" class="form-control of" id="of" placeholder="ex: 5000.00" onchange="updateTotal()"/></td>
                              </tr>
                              <tr>
                                <td><h4>Participants Fee</h4></td>
                                <td> <input type="text" name="participantsFee" class="form-control pf" id="pf" placeholder="ex: 1000.00" onchange="updateTotal2()"/></td>
                              </tr>
                              <tr id="others"> <!-- append in js --> </tr>
                            </tbody>

                            <tbody>
                              <tr>
                                <td></td>
                                <td align="left" ><h4><b>Total: ₱<span id="totalOrgFund">0.00<span></b></h4></td>
                              </tr>
                              </tbody>
                           </table>
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
                                 <td> <input type="text" name="operationalFundsAmount" class="form-control" id="operationalFundsAmount" placeholder="Enter Amount"/></td>
                              </tr>
                              <tr>
                                <td> <h4>Accumulated Depository Funds</h4> </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td align="right"><h4>Depository Funds as of</h4></td>
                                <td> 
                                    <input type="date" name="depositoryDate" class="form-control" id="dpf"/>
                                    <input type="number" min="1" step="0.50" name= "depositoryAmount" class="form-control" id="depositoryAmount" placeholder="Enter Amount"/>
                                </td>
                              </tr>
                                <tr>
                                <td> <h4>Other Sources of Funds (should match with Section 6, if applicable)</h4> </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td align="right"><h4>Participants Fee/Donation/Sponsorship</h4></td>
                                <td><input type="text" name= "donSporFunds" class="form-control" id="donSporFunds" placeholder="Enter Amount"/></td>
                              </tr>
                              <tr>
                                <td align="right"><h4><b>Total Cash for Disbursement: </b></h4></td>
                                <td><h4><b> ₱<span id="totalDis">0.00<span></b></h4></td>


                              </tr>

                              <tr>
                                <td><h4>Less: Total Projected Expenses: </h4></td>
                                 <td><h4>VALUE IS FROM THE OTHER PAGE</h4></td>
                              </tr>

                              <tr>
                                <td align="right"><h4><b>Remaining Balance: </b></h4></td>
                                <td><h4><b>HI CATHY PLS COMPUTE</b></h4></td>
                              </tr>
                            </tbody>
                           </table>
                          </div>
                       <div class="ln_solid"></div>
                     
                  </div>
                      <div class="form-group">
                            <div align="right">
                              <input id="nextbppr4" type="submit" class="btn btn-success" value="Next" style="width:80px">
                            </div>
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
  //org funds
  function updateTotal(){
    var org=document.getElementsByClassName("of")[0].value;
    var current=document.getElementById("totalOrgFund").innerText;
    var p=document.getElementsByClassName("pf")[0].value;
    var others= document.getElementsByClassName("smt")[0].length;
    var othersSize= document.getElementsByClassName("smt").length;
    var total=0, orgFund,part, i=0, temporary=0;

    if(org ==="na" || org==="NA" || org==="N/A"){
      orgFund=0;
    }
    else{
      orgFund=parseInt(org);
    }
    //if other fields not yet filled
    console.log("current" + parseInt(current));
    console.log("p" + parseInt(p));
    console.log("others" + parseInt(others));
    if(current==="0.00"){
      total=parseInt(org);

    document.getElementById("totalOrgFund").innerText = parseFloat(total).toFixed(2);
    document.getElementById("totalDis").innerText = parseFloat(total).toFixed(2);
    }
    //if other fields are not empty
    else{
      if(p=== "na" || p ==="NA" || p==="N/A"){
        part=0;
      }
      else{
        part=parseInt(p);
        console.log("p" + p);
        console.log("part" + part);
      }

      if(othersSize>0){
        for(i; i<othersSize; i++){
          var num=document.getElementsByClassName("smt")[i].value;
          console.log(num);
          temporary+=parseInt(num);
          console.log("total 3: " + temporary);
        }  
      }

    console.log("TOTAL" + total);
    console.log("orgFund" + orgFund);
    console.log("part" + part);
    console.log("temporary" + temporary);
    total= orgFund + part + temporary;

    document.getElementById("totalOrgFund").innerText = parseFloat(total).toFixed(2);
    document.getElementById("totalDis").innerText = parseFloat(total).toFixed(2);
    }

  }

  //participants fee
  function updateTotal2(){
    var p=document.getElementsByClassName("pf")[0].value;
    var org=document.getElementsByClassName("of")[0].value;
    if(p ==="na" || p==="NA" || p==="N/A"){
      part=0;
    }
    else{
      part=parseInt(p);
    }
    var total=part+parseInt(org);
    console.log(total);

    document.getElementById("totalOrgFund").innerText = parseFloat(total).toFixed(2);
    document.getElementById("totalDis").innerText = parseFloat(total).toFixed(2);
  }
    //otuer sources
  function updateTotal3(num){
    var p=document.getElementsByClassName("pf")[0].value;
    var org=document.getElementsByClassName("of")[0].value;
    var others=document.getElementsByClassName("snm")[num].value;
    var othersSize= document.getElementsByClassName("smt").length;
    var i=0, total=0;

    if(org.length>0 && p.length>0){
      for(i; i<othersSize; i++){
        var num=document.getElementsByClassName("smt")[i].value;
        console.log(num);
        total+=parseInt(num);
      }  
      total+=parseInt(p);
      total+=parseInt(org); 
    }
    console.log(total);
    document.getElementById("totalOrgFund").innerText = parseFloat(total).toFixed(2);
    document.getElementById("totalDis").innerText = parseFloat(total).toFixed(2);
  }

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
  $("#others").append('<td><input type="text" class="snm form-control" name="sourcename[' + numberIncr + ']" placeholder="Enter Other Source"/></td> <td> <input class="smt form-control"  name="sourceamount[' + numberIncr + ']"  placeholder="ex: 100.00" onchange="updateTotal3('+ numberIncr + ')"/>&nbsp;&nbsp;<button id="addc4" type ="button" class ="btn btn-default" style="width:80px"> Add</button></td>');   
    $("#addc4").click(function(){
      numberIncr++;
       $("#tr").append('<tr id="newtr"><td><input type="text" class="snm form-control" name="sourcename[' + numberIncr + ']" placeholder="Enter Other Source"/></td> <td> <input class="smt form-control"  name="sourceamount[' + numberIncr + ']"  placeholder="ex: 100.00" onchange="updateTotal3('+ numberIncr + ')"/> &nbsp;&nbsp;<button id="remc4" type ="button" style="width:80px" class="btn btn-danger">Remove</button></td></tr>');   

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
        required: 'Enter amount'
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

    $(document).on('click',"#remc4", function () {
       var v= document.getElementById("newtr");
       v.remove(); 
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
