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
                <h4>The Project Proposal contains the more comprehensive and detailed description of event that the organization is planning to have. <b> REMINDER: </b> Enter <b> N/A </b>as the unit cost if there are no expenses incurred. </h4>
            </div>
          </div>
                
          <div class="clearfix"></div>
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-label-left" id="pprform3" method="post">
                      <span class="section"></span>
                    

                      <div class= "row">
                        <div class="col-md-12">   
                           <span class="section">Breakdown of Expenses</span>
                          <div class= "form-group col-md-12">
                            <table class="table table-striped">
                              <thead>
                                <tr> 
                                  <th>Material Name</th>
                                  <th>Quantity</th>
                                  <th>Unit Cost</th>
                                  <th>Sub-total</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody id="trr">
                              </tbody>

                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>  
                                <td></td>
                                <td><button id="addc3" type ="button" class ="btn btn-default" style="width:80px">Add</button></td>
                              </tr>
                              <tr>
                                <td align= "center"></td>
                                <td align= "center"></td>
                                <td align= "center"></td>
                                <td align= "right"><h4><b>Total: ₱<span id="total"><span></b></h4></td> 
                                <td align= "center"></td>
                            
                              </tr>

                            </table>
                          </div>
                        </div>

                      </div>  
                     
                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div align="right">
                          <input id="nextbppr3" type="submit" class="btn btn-success align: right" value="Next" style="width:80px">
                        </div>
                      </div>    
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>
        <!-- /page content -->

    <!-- SCRIPT FOR VALIDATION -->
  <script type="text/javascript">

  function updateQuan(num){
    var qty=document.getElementsByClassName("quan")[num].value;
    var cost=document.getElementsByClassName("cost")[num].value;
    var costValue=cost,temp=0, grandTotal;
    if(cost === "na" || cost ==="NA"){
      costValue=0;
    }
    if(cost.length > 0){
      var total =  costValue *qty;
      document.getElementsByClassName("subTotal").item(num).innerHTML = total.toFixed(2);
       if(num>0){
        temp =document.getElementById("total").innerText;
      }

      var grandTotal =parseInt(temp) + total;
      document.getElementById("total").innerHTML=grandTotal.toFixed(2);
    }
  }
  function updateCost(num){
    var cost=document.getElementsByClassName("cost")[num].value;
    var qty=document.getElementsByClassName("quan")[num].value;
    var costValue=cost,temp=0, grandTotal;

    if(qty.length > 0){
      if(cost === "na" || cost ==="NA"){
        costValue=0;
      }
    
      var total =  costValue *qty;
      document.getElementsByClassName("subTotal").item(num).innerHTML = total.toFixed(2);
      if(num>0){
        temp =document.getElementById("total").innerText;
      }

      var grandTotal =parseInt(temp) + total;
      document.getElementById("total").innerHTML=grandTotal.toFixed(2);
    }
  }


  $(function() {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z\s]+$/i.test(value);
    })

  function removeError(element){
  element.addClass('valid')
      .closest('.form-group')
      .removeClass('has-error');
  }

  var numberIncr = 0;
  $("#trr").append('<tr><td><input type="text" class="mnm form-control" name="matname[' + numberIncr + ']" placeholder="ex: Tarpaulin"/></td> <td><input class="mqt form-control quan"  name="matqty[' + numberIncr + ']" placeholder="ex: 10" onchange="updateQuan(' + numberIncr + ')"/></td><td><input class="mcs form-control cost"name="matcost[' + numberIncr + ']" placeholder="ex: 100.00" onchange ="updateCost(' + numberIncr + ')"/></td> <td align="center"><h4> ₱ <span class="subTotal"> 00.00</span></h4></td><td></td></tr>');   

  var pprform3= $('#pprform3');
  pprform3.validate({
    rules: {
      'matname[0]':"required",
      
      'matqty[0]': "required",

      'matcost[0]':"required",
      
    },
    highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
    },
    success: removeError,


    messages: {
      'matname[0]': {
        required: 'Enter Material Name'
      },

      'matqty[0]':{
        required: 'Enter Quantity'
      },

      'matcost[0]':{
        required: 'Enter Unit Cost'
      }
    }
    });     

  $("#addc3").click(function() {
    numberIncr++;
      $("#trr").append($('<tr><td><input type="text" class="mnm form-control" name="matname[' + numberIncr + ']" placeholder="ex: Tarpaulin"/></td> <td><input class="mqt form-control quan"  name="matqty[' + numberIncr + ']" placeholder="ex: 10" onchange="updateQuan(' + numberIncr + ')"/></td><td><input class="mcs form-control cost"name="matcost[' + numberIncr + ']" placeholder="ex: 100.00" onchange ="updateCost(' + numberIncr + ')"/></td> <td align="center"><h4> ₱ <span class="subTotal"> 00.00</span></h4></td><td><button id="remc3" type ="button" class="btn btn-danger">Remove</button></td></tr>'));   
    
        $(".mnm").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter Material Name'
      }
    });
      });

       $(".mqt").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter Quantity'
      }
    });
      });

      $(".mcs").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter Unit Cost'
      }
    });
      });


     });
    $(document).on('click',"#remc3", function () {
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
