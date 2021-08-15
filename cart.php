<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/cart.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Shoping Cart</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
      <!--Navigation bar-->
      <?php include ("include/navbar.php");?>
      <?php include ("include/connection_open.php");?>
      <?php include ("include/control_product.php"); ?>
    

    <!--Cart Section-->
    <section class="mt-5">
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
        
        <div class="container">
            <div class="row cart">
                <div class="col-lg-12 text-center border rounded bg-light pt-2">
                    <h2>My Cart</h2>
                </div>

            <div class="table-responsive col-lg-9">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"class="text-white">Product</th>
                            <th scope="col"class="text-white">Price</th>
                            <th scope="col"class="text-white">Quantity</th>
                            <th scope="col"class="text-white">Total</th>
                        </tr>
                    </thead>
                    <?php
                        if(isset($_SESSION['user_info'])){
                            if (isset($_COOKIE['product_id'])) {
                                $product_id= $_SESSION['product_info']['product_id'];
                                //$cart_id = $_COOKIE['cart_id'];
                                $query = " SELECT * FROM product where product_id = $product_id";
                                $result = mysqli_query($link,$query);

                                while($row = mysqli_fetch_array($result))
                                {
                           
                    ?>
                    <tbody>
                        <tr>
                            <td>
                                <form method="post">
                                <div class="main">
                                    <div class="col-sm-1">
                                    <div class="card d-flex" style="height: 20; width: 20;">
                     <!--W=145 H=98--> <!--<img src="<?php echo $row['product_image']; ?>"alt="">-->
                                    </div>
                                </div>
                                    <div class="des">
                                        <p><?php echo $row['product_code']; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6><?php echo $row['price']; ?>&#2547</h6>
                                <input type="hidden" name="price_product" value="<?php echo $row['price']; ?>">
                            </td>
                            <td>
                                <div class="counter">
                                    <!--<i class="fas fa-angle-down"></i>-->
                                    <input class="input-number text-center"type="number" name="number" 
                                    value="1"min="0"max="10">
                                    <?php// $numitem = $_POST['number'];
                                     ?>
                                    <!--<i class="fas fa-angle-up"></i>-->
                                </div>
                            </td>
                            <td>
                                <h6><?php echo $row['price']; ?></h6>
                            </td>
                            </form>
                        </tr>
                        <?php   
                                
                                $itemprice = $row['price'];
                                //$total = $itemprice + $total;
                                $_SESSION['total'] = $_SESSION['total']+ $itemprice;
                            }
                        }
                        }  
                        ?>
                        
                    </tbody>
                </table>
            </div>
    <div class="col-lg-3">
        <div class="checkout mt-2 ml-4">
            <form method="post">
            <ul>
                <!--<li class="subtotal">Quantity
                    <span>10</span>
                </li>-->
                <li class="cart-total">Total
                <span><?php echo $_SESSION['total']; ?> &#2547</span></li>
            </ul>
            <!--<a class="proceed-btn rounded">Proceed to Checkout</a>-->
            <button class="mb-3 btn btn-color slide-btn" name="checkout">Proceed to Checkout</button>
            </form>
        </div>
    </div>
            </div>
        </div>
    </section>
    
    <!--Footer-->
      <?php include ("include/footer.php");?>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>