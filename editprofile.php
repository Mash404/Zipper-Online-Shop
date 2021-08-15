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

    <title>Edit Profile</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
    <?php include ("include/navbar.php");
    include "include/control_user_data.php";?>
    <?php
    //session_start();
    if(isset($_SESSION['user_info'])){
    ?>


    <!--=======Profile======-->
    <div class="container bootstrap snippets bootdey">
    <h1 class="mt-5 text" style="color: #E96453;"><span class="glyphicon glyphicon-user"></span>Edit Profile</h1>
      <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <!--<div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input type="file" class="form-control">
        </div>-->
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <!--<div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>-->
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
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">Full name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" value="<?php echo $_SESSION['user_info']['name']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $_SESSION['user_info']['email']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone No:</label>
            <div class="col-lg-8">
              <input class="form-control" name="phone" type="text" value="<?php echo $_SESSION['user_info']['phone']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" name="password" type="password" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Conform-Password:</label>
            <div class="col-lg-8">
              <input class="form-control" name="cpassword" type="password" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Dhaka">(GMT+6:00) Dhaka</option>
                </select>
              </div>
            </div>
          </div>
          <div>
            <input class="mt-4 rounded btn btn-color slide-btn btn-md" type="submit" name="save" value="Save Information">
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<?php } ?>





<!--Footer-->
      <?php include ("include/footer.php");?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>