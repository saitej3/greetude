<?php
include('login_helper.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Greetude">

    <title>Login</title>

    <!--Core CSS -->
    <link href="../bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-body" style="background-image: url(../images/login_bg.jpg  );">

    <!--header start-->
<header class="header fixed-top clearfix">


  <div class="top-nav clearfix">
    <a href="#"><img src="../images/logo_text.png" alt="" style="height : 60px; width:300px; align:center;" ></a>
   
  </div>
<!--logo end-->
    <!--search & user info start-->

</header>
<!--header end-->

    <div class="container">
      <br><br><br>
      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading" >sign in now</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" class="form-control" placeholder="User ID" autofocus id="name" name="username">
                <input type="password" class="form-control" placeholder="Password" d="password" name="password">
            </div>
            <label class="checkbox">
                
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit" name="submit" value=" Login ">Sign in</button>

            
                Don't have an account yet?
                <strong><a class="" href="../registration">
                    Create an account
                </a></strong>
            
        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  </body>
</html>
