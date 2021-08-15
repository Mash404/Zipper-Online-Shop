<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link  rel="stylesheet" href="css/style.css"/>
    <link  rel="stylesheet" href="css/profile.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>All Products</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
    <?php include ("include/navbar.php");?>
    <?php
  //session_start();
  if(isset($_SESSION['user_info'])){
?>

    <!--=======Profile======-->
    <div class="container">
      <div class="main">
        <!--<a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>-->
      </div>
      
      <div class="row">
        <div class="col-md-4 mt-1">
          <div class="card text-center sidebar">
            <div class="card-body">
              <img src="images/depositphotos_59094701-stock-illustration-businessman-profile-icon.jpg" class="rounded-circle" width="150">
              <div class="mt-5 text-center text-uppercase">
                <h3>Profile</h3>
                <!--<a href="">Home</a>
                <a href="">Work</a>
                <a href="">Support</a>
                <a href="">Setting</a>
                <a href="">Signout</a>-->
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
              <h1 class="m-3">About</h1>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <h5>Full Name</h5>
                  </div>
                  <div class="col-md-9 text-secondary ">
                    <?php echo" " .$_SESSION['user_info']['name']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <h5>Email</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $_SESSION['user_info']['email']; ?></div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <h5>Phone</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $_SESSION['user_info']['phone']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <h5>Password</h5>
                  </div>
                  <div class="col-md-9 text-secondary" type="password">
                    <?php echo $_SESSION['user_info']['password']; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 content">
              <h1 class="m-3">Join Info</h1>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <h5>Joined</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $_SESSION['user_info']['created_date']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <h5>Last Updated</h5>
                  </div>
                  <div class="col-md-9 text-secondary">
                    <?php echo $_SESSION['user_info']['updated_date']; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
   <?php }
    else{
      header('location: index.php');
    }

    ?>
    </div>




<!--Footer-->
      <?php include ("include/footer.php");?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>