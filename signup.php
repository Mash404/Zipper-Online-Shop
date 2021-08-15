<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Sign Up</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
      <?php include ("include/navbar.php");?>
      <?php require_once ("include/control_user_data.php"); ?>
      <!--Sign up-->
      <div class="signup-container d-flex align-items-center justify-content-center">
        <form class="signup-form text-center col-md-3" method="post">
          <h1 class="mt-4 mb-4 font-weight-light text-uppercase">Sign Up</h1>
          <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
          <div class="form-group">
            <input type="text" class="mb-3 form-control rounded-pill form-control-lg" placeholder="Name" name="name"  required>
          </div>
          <div class="form-group">
            <input type="text" class="mb-3 form-control rounded-pill form-control-lg" placeholder="Email" name="email" required>
          </div>
          <div class="pd-telephone-input form-group">
            <input type="tel" class="mb-4 form-control rounded-pill form-control-lg" placeholder="Phone No" name="phone">
          </div>
          <div class="form-group">
            <input type="password" class="mb-3 form-control rounded-pill form-control-lg" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <input type="password" class="mb-3 form-control rounded-pill form-control-lg" placeholder="Re-Type Password"  name="cpassword" required>
          </div>
          <div>
            <input class="rounded-pill btn btn-color slide-btn btn-md" type="submit" name="signup" value="Sign up">
          </div>
          <p class="mt-3 font-weight-normal">Already have an account? <a href="login.php"><strong>Login Now!</strong></a></p>
        </form>
      </div>



      <!--Footer-->
      <?php include ("include/footer.php");?>

    <script src="js/intlTelInput.js"></script>  
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>