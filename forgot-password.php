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

    <title>Forgot Password</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
    <?php include ("include/navbar.php");?>
    <?php include ("include/control_user_data.php"); ?>

    <!--Forgot password-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form mt-5">
                <form action="forgot-password.php" method="post" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="form-group">
                        <input class="mt-3 rounded-pill btn btn-color slide-btn" type="submit" name="check-email" value="Continue">
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