<?php 

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>AbcAcademy Admin Dashboard</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">
        <form action="login_post.php" method="POST">
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
                <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Abcacademy <span class="tx-info tx-normal">admin</span></div>
                <div class="tx-center mg-b-60">Admin Dashboard</div>

                <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your phone no." name="phone">
                </div><!-- form-group -->
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter your admin password" name="password">
                
                <?php
                    if(isset($_SESSION['email_password_error'])){
                ?>
                    <small class="text-danger">
                    <?php 
                        echo $_SESSION['email_password_error'];
                        unset($_SESSION['email_password_error']);
                    ?>
                    </small>
                    <?php
                    }
                ?>

                <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Sign In</button>

                <div class="mg-t-60 tx-center">Not yet a member? <a href="../index.php" class="tx-info">Sign Up</a></div>
            </div><!-- login-wrapper -->
        </form>
    </div><!-- d-flex -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
