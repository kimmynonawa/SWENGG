<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSO</title>

    <!-- Bootstrap -->
    <link href=" <?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" <?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href=" <?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
	
  </head>

  <body class="login">
    <div>
     
    <center><img src="<?php echo base_url();?>images/cso.png" id="csoimg"> </center> 
      <div class="login_wrapper">
	  
        <div class="animate form login_form">
          <section align ="center" class="login_content">
			<div style="text-align:center;">
				<form method="post" action="login">
				  <h1>Login</h1>
				  <?php echo validation_errors(); ?>
				  <div>
					<input name="Username" type="text" class="form-control" placeholder="Username" required="" />
				  </div>
				  <div>
					<input name="Password" type="password" class="form-control" placeholder="Password" required="" />
				  </div>
				  <div>
					<input type="submit" value="Log in">
				  </div>
				  <div class="clearfix"></div>
				</form>
			</div>
          </section>
        </div>

	  </div>
	</div>
  </body>
</html>
