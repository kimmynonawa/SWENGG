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

    <!-- jquery -->
    <script src= "<?php echo base_url();?>js/jquery.js"> </script>
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src= "<?php echo base_url();?>js/jquery.validate.min.js"></script>

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
                  <li><a href="CSO_Home.html"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
                  <li><a><i class="fa fa-edit"></i> Organizations <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                      <li><a href="CSO_NewOrg.html">Add New Organization</a></li>
                    </ul>
                  </li>
                  <li><a href="CSO_Calendar.html"><i class="fa fa-table"></i> Calendar <span class="fa fa-chevron-down"></span></a>
                  <li><a href="CSO_GOSM.html"><i class="fa fa-list-alt"></i> GOSM <span class="fa fa-chevron-down"></span></a>
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
            <div class= "x_panel">
              <div class= "row">
                <div class="title col-md-5">
                  <h3>Contest Mechanics</h3>
                </div>
                <div align="right">
                    <ul class="nav navbar-right panel_toolbox"> 
                      <li>
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                    </ul>
                </div>
              </div>
              <div class= "x_content bg-success">
                <h4><p class="text-success"> Lorem ipsum dolor sit amet, vel pretium architecto, semper semper eu elit sed, lacus cras quis, pede velit. Pretium convallis suscipit, vestibulum rutrum, eu integer montes erat ut tincidunt, facilisis dolor. Et fermentum nulla, litora leo in, nunc aliquam aperiam, rutrum elementum, dictum malesuada morbi amet nisl. sociis odio laoreet dolor mauris. </p></h4>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="post" id="conmech">

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-2"> <h4>General Guidelines</h4> </label>
                          <div class= "form-group col-md-6 ">
                            <textarea name= "guidelines" rows="4" class="form-control" placeholder="ex: All of the participants must not have their cellphones with them."></textarea> 
                          </div>        
                        </div>
                      </div> 

                      <div class= "row" id="mech"> </div>

                      <div class= "row">
                        <div class= "col-md-8">
                          <label class="control-label col-md-2"></label>
                          <div class="col-md-6">
                            <div class = "buttons">
                              <button id="addmech" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                              <button id="deletemech" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                            </div>     
                          </div>
                        </div>
                      </div>

                      <div class= "row" id="criteria"> </div>

                      <div class= "row">
                        <div class= "col-md-8">
                          <label class="control-label col-md-2"></label>
                          <div class="col-md-8">
                            <div class = "buttons">
                              <button id="addcrit" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                              <button id="deletecrit" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                            </div>     
                          </div>
                        </div>
                      </div>

                      <div class= "row" id="listjudge"> </div>

                      <div class= "row">
                        <div class= "col-md-8">
                          <label class="control-label col-md-2"></label>
                          <div class="col-md-8">
                            <div class = "buttons">
                              <button id="addjudge" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button>
                              <button id="deletejudge" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button>
                            </div>     
                          </div>
                        </div>
                      </div>

                      <div class= "row">
                        <div class="col-md-8">   
                          <label class= "col-md-2"> <h4>Type of Contest</h4></label>
                            <div class= "form-group col-md-4">
                              <select id="type" class="form-control col-md-7 col-xs-12" style="width:220px">
                                <option disabled selected>Select Type of Contest</option>
                                <option value="1"> Academic</option>
                                <option value="2"> Not Academic</option>           
                              </select>
                            </div>
                            <div class="col-md-6">
                              <button class="form-control" id="select" style="width:95px">Select</button>
                            </div>        
                          </div> 
                      </div>  
                           
                      <div class= "row" id="listquestions"></div>
                      <div id="buttons"> </div>
                
                      <div class="ln_solid"></div> 
                      <div class="form-group">
                        <div class="col-md-12 col-md-offset-11">
                          <input id="nextconmech" type="submit" class="btn btn-success align: right" value ="Next">
                        </div>
                      </div>
                    </form>
                  </div><!-- xcontent -->
                </div> <!-- xpanel -->              
              </div> <!-- row -->
            </div> 
          </div>
        </div>

    <script type="text/javascript">
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
  $("#mech").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Mechanics</h4> </label><div class= "form-group col-md-6"><input class="mch form-control type="text" name= "mechanics[' + numberIncr + ']" " placeholder="ex: Sing and dance with your blockmates"/></div></div></div>');

  var numberIncr1 = 0;
  $("#criteria").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Criteria</h4> </label><div class= "form-group col-md-6"><input class="crt form-control" type="text" name= "cri[' + numberIncr1 + ']" placeholder="ex: One hundred points for costume."/></div></div></div>');

  var numberIncr2 = 0;
  $("#listjudge").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Judges</h4> </label><div class= "form-group col-md-6"><input class=" jdg form-control" type="text" name= "judge[' + numberIncr2 + ']" placeholder="ex: Juan Dela Cruz"/></div></div></div>');

  $("#addmech").click(function() {
    numberIncr++;
            $("#mech").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Mechanics</h4> </label><div class= "form-group col-md-6"><input class="mch form-control type="text" name= "mechanics[' + numberIncr + ']" " placeholder="ex: Sing and dance with your blockmates"/></div></div></div>'); 
        $(".mch").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter mechanic',
      }
    });
      });  
  });

   $("#addcrit").click(function() {
            numberIncr1++;
            $("#criteria").append('<div class="col-md-12 col-sm-12 col-xs-12"  id="newph1"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Criteria</h4> </label><div class= "form-group col-md-6"><input class="crt form-control" type="text" name= "cri[' + numberIncr1 + ']" placeholder="ex: One hundred points for costume."/></div></div></div>');  
        $(".crt").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter criteria',
      }
    });
      }); 
  });

    $("#addjudge").click(function() {
            numberIncr2++;
            $("#listjudge").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph2"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input class="jdg form-control" type="text" name= "judge[' + numberIncr2 + ']"  placeholder="ex: Juan Dela Cruz"/></div></div></div>');   
                   $(".jdg").each(function(){
        $(this).rules( "add", {
        required:true,
        lettersonly: true,
      messages: {
        required: 'Enter name',
        lettersonly: 'Alphabetic characters only'
      }
    });
      });
  });

   $('#select').click(function(){
        var choice = document.getElementById("type").value;
        if(choice==1){
            numberIncr4=0;
           event.preventDefault();
            $("#listquestions").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Questions </h4> </label><div class= "form-group col-md-6"><input type="text" name= "questions[' + numberIncr4 + ']" class="form-control" placeholder="ex: What is your advocacy?"/></div></div></div>');
            $("#buttons").append('<div class= "row"><div class= "col-md-8"><label class="control-label col-md-2"></label><div class="col-md-8"><div class = "buttons"><button id="addquestion" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button><button id="deletequestion" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button></div></div></div></div>');
            
            $("#addquestion").click(function() {
              numberIncr4++;
              $("#listquestions").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph4"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input class=" qtn form-control" type="text" name= "questions[' + numberIncr4 + ']"  placeholder="ex: What is your advocacy?"/></div></div></div>');   
             $(".qtn").each(function(){
            $(this).rules( "add", {
        required:true,
         messages: {
        required: 'Enter question'
      }
    });
      });  

            });

           $("#deletequestion").click(function() {
                  var v= document.getElementById("newph");
                  v.remove();
        });
        
        }
      });




  var conmech= $('#conmech');
  conmech.validate({
    rules: {
      guidelines:{
        required:true
      },
      'mechanics[0]':{
        required: true
      },
      'cri[0]':{
        required: true
      },
      'judge[0]':{
        required:true,
        lettersonly: true
      },
      'questions[0]' :{
        required: true
      }

    },
    highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
    },
    success: removeError,

    messages:{
      guidelines:{
        required: 'Enter guideline'
      },
      'mechanics[0]':{
        required: 'Enter mechanic'
      },
      'cri[0]':{
        required: 'Enter criteria'
      },
      'judge[0]':{
        required: 'Enter name',
        lettersonly: 'Alphabetic characters only'
      },
      'questions[0]' :{
        required: 'Enter question'
      }
    }
    });


    $("#deletemech").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

     $("#deletecrit").click(function() {
            var v= document.getElementById("newph1");
            v.remove();
      });

     $("#deletejudge").click(function() {
            var v= document.getElementById("newph2");
            v.remove();
      });

     $("#deletequestion").click(function() {
            var v= document.getElementById("newph3");
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
