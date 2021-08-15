<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Login</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
      <?php include ("include/navbar.php");?>
      <?php require_once ("include/control_user_data.php"); ?>

    <!--login form-->
    <div class="signup-container d-flex align-items-center justify-content-center">
        <form class="signup-form text-center col-md-3" method="post">
          <h1 class="mt-4 mb-4 font-weight-light text-uppercase">Login</h1>
            <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
          <div class="form-group">
            <input type="text" class="mb-3 form-control rounded-pill form-control-lg" placeholder="Email" name="email" required>
          </div>
          <div class="form-group">
            <input type="password" class="mb-3 form-control rounded-pill form-control-lg" placeholder="Password" name="password" required>
          </div>
          <div class="form-link forgot-link d-flex align-items-center justify-content-between ">
            <!--<div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember">
              <label for="remember">Remember Password?</label>
            </div>-->
            <a href="forgot-password.php">Forgot Password?</a>
          </div>
          <!--<button type="submit" name="login" class="rounded-pill btn btn-color slide-btn btn-md">Login</button>-->
          <div>
            <input class="rounded-pill btn btn-color slide-btn btn-md" type="submit" name="login" value="Login">
          </div>
          <div class="form-link">
          <p class="mt-3 mb-3 font-weight-normal">Do not have an account? <a href="signup.php"><strong>Sign Up Now!</strong></a></p>
          </div>
        </form>
      </div>





    <!--Footer-->
      <?php include ("include/Footer.php");?>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>      