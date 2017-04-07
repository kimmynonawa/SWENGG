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
              <h3> Application for Use of Trademark
                <div class="icon">
                  <span class="glyphicon glyphicon-menu-down"></span> 
                </div>
              </h3>
            </div>
            <div class="infoBody" id="info">
                <h4><b> Important Reminders: </b>
                <ol>
                  <li>Accomplish two (2) copies of this form for your office/organization and STRATCOM reference.</li>
                  <li>Attach a copy of the proposed design/layout of the merchandise/print material/video.</li>
                  <li>Allow five (5) days processing for the approval of the merchandise/print material/video.  </li>
                  <li>Strictly follow the approved duration and quantity for the use of trademark. </li>
                  <li>Check the remarks on the attachments.</li>
                </ol></h4>
            </div>
          </div>
                
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form method="post" id = "formTrademark2" autocomplete="off">
                      <div class= "row" id="tmarks">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="row"> 
                            <div class="col-md-8">
                              <label class= "col-md-5"><h4>Trademark To Use:</h4></label>
                                <div class= "form-group col-md-3">
                                  <select class="select2_group form-control" id="trademarkType" name="trademarkTypeChoice[]">
                                    <option value="1">Logos/Design</option>
                                    <option value="2">DLSU Labels</option>
                                    <option value="3">DLSU Taglines</option>
                                  </select>
                                </div>
                               
                                <div class= "form-group col-md-4">
                                  
                                  <select class="select2_group form-control" id="trademarkOptions" name="trademarkChoice[]">
                                    <?php
                                      foreach ($trademarkList as $trademark) { 
                                        echo "<option value='$trademark->trademarkID'> $trademark->name </option>";
                                      }
                                    ?> 
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          
                      </div> 
                      <div class= "row">
                        <div class= "col-md-8">
                          <label class="control-label col-md-5"></label>
                          <div class="col-md-6">
                            <div class = "buttons">
                                <button id="addtm" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                                <button id="deletetm" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                            </div>     
                          </div>
                        </div>
                      </div>
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Type of Item/Material To Produce</h4> </label>
                            <div class= "form-group col-md-7">
                              <select id="matToProduce" name="matToProduce" class="form-control col-md-7 col-xs-12">
                                <option disabled selected>Select Type</option>
                                <option> Merchandise</option>
                                <option> Multimedia/Web</option>
                                <option> Video</option>
                                <option> Poster/Flyer/Invite/Banner</option>
                                <option> Brochure/Publication</option>                 
                              </select>
                            </div>        
                        </div>
                      </div> 
                      
                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Purpose Of Use</h4> </label>
                            <div class= "form-group col-md-7">
                              <textarea name= "trademarkUse" rows="2" class="form-control" placeholder="ex: Banner for the winners of a contest"></textarea> 
                            </div>        
                        </div>
                      </div>  

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Proposed Start Date</h4> </label>
                          <div class= "form-group col-md-7">
                            <input type="date" name= "startDate" id="startDate" class="form-control"/>
                          </div>
                          <label class= "col-md-5"> <h4>Proposed End Date</h4> </label>
                          <div class= "form-group col-md-7">
                            <input type="date" name= "endDate" id="endDate" class="form-control"/>
                          </div>          
                        </div>
                      </div>  

                     <!--  <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Activity Where Trademark Will Be Used</h4> </label>
                            <div class= "form-group col-md-7">
                              <select id="actType" name="actType" class="form-control col-md-7 col-xs-12" >
                                <option disabled selected>Select Type Of Activity</option>
                                <?php
                                  foreach ($activityTypes as $activity) { 
                                    echo "<option value='$activity->idREF_ACTIVITYTYPE'> $activity->activityType </option>";
                                  }
                                ?>                
                              </select>
                          </div>    
                        </div>
                      </div>  -->

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-5"> <h4>Venue</h4> </label>
                            <div class= "form-group col-md-7">
                              <input type="text" name= "venue" class="form-control" placeholder="ex: Henry Sy Grounds" />
                          </div>    
                        </div>
                      </div> 

                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div align="right">
                          <input id="nextTrademark2" type="submit" class="btn btn-success" value ="Next" style="width: 80px">
                        </div>
                      </div>
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>

    <!-- SCRIPT FOR VALIDATION AND ROW ADDING -->
    <script type="text/javascript">
      $(function() {
        function removeError(element){
          element.addClass('valid').closest('.form-group').removeClass('has-error');
        }
        $('#formTrademark2').validate({
        rules: {
          matToProduce: {
            required:true
          },
          trademarkUse: {
            required:true
          },
          startDate: {
            required:true
          },
          endDate: {
            required: true
          },
          // actType: {
          //   required:true,
          // },
          venue: {
            required:true,
          }
        },
        highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
        },
        success: removeError,

        messages:{
          matToProduce: {
            required: 'Select material type'
          },
          trademarkUse: {
            required: 'Enter purpose'
          },
          startDate: {
            required: 'Enter start time'
          },
          endDate: {
            required: 'Enter end time'      
          },
          // actType: {
          //   required: 'Select activity type'
          // },
          venue: {
            required: 'Indicate venue'
          }
        }
        });

        // AJAX FOR LIST OF TRADEMARKS FOR FIRST ROW
        $('#trademarkType').on('change',function(){
          var trademark = $('#trademarkType').val();
          $.ajax({
            url: "approval_use_trademark_details_2",
            method: "POST",
            data:{
              'trademark':trademark
            },
            success: function(data){
            $('#trademarkOptions').empty();
              for (i = 0; i < data.length; i++){
                $('#trademarkOptions').append('<option value="'+ data[i].trademarkID +'">'+ data[i].name +'</option>');
              }
            }
          });
        });

        // AJAX FOR LIST OF TRADEMARKS FOR ADDED ROWS
        $('#newTrademarkType').on('change',function(){
          var trademark = $('#newTrademarkType').val();
          $.ajax({
            url: "approval_use_trademark_details_2",
            method: "POST",
            data:{
              'trademark':trademark
            },
            success: function(data){
            $('#newTrademarkOptions').empty();
              for (i = 0; i < data.length; i++){
                $('#newTrademarkOptions').append('<option value="'+ data[i].trademarkID +'">'+ data[i].name +'</option>');
              }
            }
          });
          console.log("change");
        });
    
        $("#addtm").click(function() {
          var size = <?php echo sizeof($trademarkList);?>;
          var optionValues = new Array(); 
          var optionNames = new Array();
          var i = 0;
          <?php
            foreach($trademarkList as $trademark) {?>
              optionValues[i] = <?php echo $trademark->trademarkID; ?>;
              optionNames[i] = "<?php echo $trademark->name; ?>";
              i++;     
          <?php
            }
          ?> 

          var newRow = '<div class="col-md-12 col-sm-12 col-xs-12" id="newph">';
          newRow += '<div class="row">';
          newRow += '<div class="col-md-8">';
          newRow += '<label class= "col-md-5"></label>';
          newRow += '<div class= "form-group col-md-3">';
          newRow += '<select class="select2_group form-control" id="newTrademarkType" name="trademarkTypeChoice[]">';
          newRow += '<option value="1">Logos/Design</option>';
          newRow += '<option value="2">DLSU Labels</option>';
          newRow += '<option value="3">DLSU Taglines</option>';
          newRow += '</select></div>';
          newRow += '<div class= "form-group col-md-4">';
          newRow += '<select class="select2_group form-control" id="newTrademarkOptions" name="trademarkChoice[]">';
          for (i = 0; i < optionValues.length; i++) {
            newRow += '<option value='+optionValues[i]+'>'+optionNames[i]+'</option>';
          }
          newRow += '</select></div></div></div>';
           $("#tmarks").append(newRow);              
        });

       $("#deletetm").click(function() {
          var v = document.getElementById("newph");
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
