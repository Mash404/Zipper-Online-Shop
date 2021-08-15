 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/product.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Product Details</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
    <?php include ("include/navbar.php");?>
    <?php include ("include/connection_open.php");?>
    <?php include ("include/control_product.php"); ?>

 <!--single Product-->
  <div class="container-product">
    <div class="row">

      <?php
      if(isset($_COOKIE['product_id']) ){
        $product_id=$_COOKIE['product_id'];
        $query = " SELECT * FROM product where product_id = $product_id";
        $result = mysqli_query($link,$query);

        while($row = mysqli_fetch_array($result))
        {
        ?>
      <div class="col-md-5">
        <div class="card product-single-img">
        <img src="<?php echo $row['product_image']; ?>" alt="">
        </div>
      </div>
      <div class="col-md-7">
        <form method="post">
        <p class="newarrival text-center">NEW</p>
        <h2><?php echo $row['product_name']; ?></h2>
        <p>Product Code: <?php echo $row['product_code']; ?></p>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <p class="price">BDT: <?php echo $row['price']; ?> &#2547 </p>
        <p><b>Availability: </b>
          <?php echo $row['quantity']; ?> </p>
        </p>
        <p><b>Condition: </b><?php echo $row['des']; ?></p>
        <p><b>Catagory: </b><?php echo $row['catagory']; ?></p>
        <label><b>Quantity:</b></label>
        <input type="text" name="quantity" value="1">
        <button class="mb-3 btn btn-color slide-btn float-end"name="addtocart">Add to cart</button>
        <input type="hidden" name="cart_id" value="<?php echo $row['product_id']; ?>">
        </form>
      </div>
    </div>
  </div>
<?php } } ?>

    <!--Footer-->
      <?php include ("include/footer.php");?>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html> 