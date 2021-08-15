<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link  rel="stylesheet" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Password Changed</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
      <?php include ("include/navbar.php");?>
      <?php require_once ("include/control_user_data.php");
        if($_SESSION['info'] == false){
        header('Location: login.php');  
        }
        ?>

    <!--pasward change-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form mt-5">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="login.php" method="post">
                    <div class="form-group d-flex align-items-center justify-content-center">
                        <input class="rounded-pill btn btn-color slide-btn" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<!--Footer-->
      <?php include ("include/footer.php");?>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>