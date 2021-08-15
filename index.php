<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Zipper Online Shop</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--====Navigation bar====-->
      <?php include ("include/navbar.php");?>
      <!--====Carousel & featured product====-->
      <?php include ("include/carousel.php");?>

      <!-- Product section -->
 <section id="products" class="products py-5">
  <div class="container">
    <!-- section title -->
    <div class="row">
      <div class="col-10 mx-auto col-sm-6 text-center">
        <h1 class="text-capitalize product-title">Featured Products</h1>
      </div>
    </div>
    <!-- end section title -->
     <!-- Product items -->
    <div class="row product-items" id="product-items">

      <?php
          include ("include/connection_open.php");
          $sql = "SELECT * FROM product";
          $sql_run = mysqli_query($link, $sql);
          $flag = 0;
          if (mysqli_num_rows($sql_run)>0) {
            while ($row = mysqli_fetch_assoc($sql_run)) {
              if($flag==6) break;
            $flag = $flag+1;
            ?>

      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
         <div class="card single-item">
          <div class="img-container">
            <img src="<?php echo $row['product_image']; ?>" class="card-img-top product-img" alt="">
            </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> <?php echo $row['product_name']; ?> </h5>
             <span class="font-weight-bold"><?php echo $row['price']?>&#2547 </span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <?php
                      }
                    }
                    else{
                      echo "No Products Found";
                    }?>
      </div>
    </div>
  </section>
      
      <!---About Section=====-->
  <section id="about-sec">
     <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 text-center">
          <img src="images/toa-heftiba-KQ1n6HzSahY-unsplash.jpg" width="450" height="150" 
          class="img-fluid watch-img">
        </div>
        <div class="col-lg-7 text-lg-right  text-center text-color about-text">
          <h1 >About Company</h1>
          <p class="text">You will get the best service from us. If you prefer quality you will not be disapoinded. </p>
        </div>
      </div>
      </div>
      </section>
      <!---End of About Section---->
  



      <!--Footer-->
      <?php include ("include/footer.php");?>
      
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>