<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/team.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Team Page</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
    <?php include ("include/navbar.php");?>


      <!--Card View-->
      <section id="team">
        <div class="container my-3 py-5 text-center">
          <div class="row mb-5">
            <div class="col">
              <h1 class="Team">Our Team</h1>
              <p class="mt-3"> </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php
          include ("include/connection_open.php");
          $sql = "SELECT * FROM team ";
          $sql_run = mysqli_query($link, $sql);
          if (mysqli_num_rows($sql_run)>0) {
            while ($row = mysqli_fetch_assoc($sql_run)) {
            ?>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                <img src="images/depositphotos_43381243-stock-illustration-male-avatar-profile-picture.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                <h3><?php echo $row['tm_name']; ?></h3>
                <h5><?php echo $row['tm_id']; ?></h5>
                <p><?php echo $row['group']; ?></p>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href="#" class="bg-org">
                    <i class="fa fa-facebook fa-2x"></i>
                    </a>
                  </div>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#" class="bg-org">
                      <i class="fa fa-twitter fa-2x"></i>
                      </a>
                    </div>
                  </div>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href="#" class="bg-org">
                      <i class="fa fa-instagram fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
            <?php
                      }
                    }
                    else{
                      echo "No Members Found";
                    }?>
        </div>
      </section>

      <!--Footer-->
      <?php include ("include/footer.php");?>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>