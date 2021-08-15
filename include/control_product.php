<?php
//session_start();
require "connection_open.php";
$errors = array();

	//--------Go to Product details-------
	if(isset($_POST['details']))
        {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/Zipper_Online_Shop/product-details.php',true,303);
            $product_id=$_POST['cart_id'];
            setcookie('product_id',$product_id,time()+3600);
          
        }

    //-------Add to cart---------
    if (isset($_POST['addtocart'])) {

    		$cookie_pid = $_COOKIE['product_id'];
            $check_product = " SELECT * FROM product where product_id='$cookie_pid'";
            $res = mysqli_query($link, $check_product) or die(mysqli_error($link));
        	if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $product_data = array(
                    "product_id" => $fetch['product_id'],
                    "product_name" => $fetch['product_name'],
                    "product_code" => $fetch['product_code'],
                    "catagory" => $fetch['catagory'],
                    "product_image" => $fetch['product_image'],
                    "price" => $fetch['price'],
                    "quantity" => $fetch['quantity'],
                    "quantity" => $fetch['quantity']
                    );
                    $_SESSION['product_info']= $product_data;
        			header('Location: http://'.$_SERVER['HTTP_HOST'].'/Zipper_Online_Shop/cart.php',true,303);
            		$cart_id=$_POST['cart_id'];
            		setcookie('product_id',$cart_id,time()+3600);
       			}
}


        //-------Proceed To Chechout---------
    if (isset($_POST['checkout'])) {
    	$user = $_SESSION['user_info']['user_id'];
    	$total =$_SESSION['total'];

    	$ins_order= "INSERT INTO order (user_id,total_price)
            VALUES('$user', '$total')";

            if(mysqli_query($link, $ins_order))
            {
                $errors['order'] = "Order Proceeded";
            }
            else
            {
                $errors['order'] = "Sorry! Something Went Wrong";
            }


    }

?>