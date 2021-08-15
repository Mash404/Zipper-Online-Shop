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

    <title>All Products</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
    <?php include ("include/navbar.php");?>
    <?php require_once ("include/control_product.php"); ?>

    <!-- section title -->
<section id="product-all" class="product-all py-5">
  <div class="container">
    <div class="row justify-content-center product-bg-dark my-3">
      <div class="col-10 mx-auto col-sm-6 text-center">
        <h1 class="text-capitalize product-title">Products</h1>
      </div>
    </div>
    <div class="row">
      <?php
          include ("./include/connection_open.php");
          $flag = 0;
          $sql = "SELECT * FROM product";
          $sql_run = mysqli_query($link, $sql);
          if (mysqli_num_rows($sql_run)>0) {
            while ($row = mysqli_fetch_assoc($sql_run)) {
              if( !isset($_SESSION['user_info'])){
               $flag = $flag +1 ; 
              }
              if($flag == 15) {break;}
            ?>
      <div class="container">
        <div class="row product-single mb-2">
      <div class="col-md-3">
        <div class="card product-single-img">
        <img src="<?php echo $row['product_image']; ?>" alt="">
      </div>
      </div>
      <div class="col-md-9 pt-4 product-single-body">
        <form method="post">
        <h4><?php echo $row['product_name']; ?></h4>
        <p>Product Code: <?php echo $row['product_code']; ?></p>
        <p class="price">BDT: <?php echo $row['price'];?> &#2547 </p>
        <button type="submit" name="details" class="mb-3 btn btn-color slide-btn float-end">
        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
        Details</button>
        <button class="mb-3 btn btn-color slide-btn float-end"name="addtocart">Add to cart</button>
        <input type="hidden" name="cart_id" value="<?php echo $row['product_id']; ?>">
        </form> 
      </div>
      </div>
      </div>
      <?php
          }
        }
        else{
          echo "No Products Found";}?>
               
    </div>
  </div>
    </section>

      <!--Footer-->
      <?php include ("include/footer.php");?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>