<?php
//session_start();
require "connection_open.php";
$errors = array();


//----Sign Up button Action----
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);
    
    if($password != $cpassword){
      $errors['password'] = "Confirm password not matched!";
    }


    $email_check = 'SELECT * From user WHERE email="'.$email.'"';
    $res_check = mysqli_query($link, $email_check);

    $num_of_row = mysqli_num_rows($res_check);

    date_default_timezone_set("ASIA/DHAKA");
    $current_date = date('Y-m-d H:i:s');

    if($num_of_row > 0) {
        $errors['email'] = "Email that you have entered is already exist!";
    }

    if(count($errors) == 0){
        $encpassword = password_hash($password, PASSWORD_BCRYPT);//md5($password);
        $code = rand(999999, 111111);
        $status = 0;

        $insert_data = "INSERT INTO user (name,email,phone,password,code,status,created_date,updated_date)
        VALUES('".$name."', '".$email."', '".$phone."', '".$encpassword."', '".$code."', '".$status."', '".$current_date."', '".$current_date."')";

        $data_check = mysqli_query($link, $insert_data);

        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "mashfiqrr88@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

  }

  //----Varification with email----
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($link, $_POST['otp']);
        $check_code = 'SELECT * FROM user WHERE code = "'.$otp_code.'"';
        $code_res = mysqli_query($link, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 1;
            $update_otp = 'UPDATE user SET code = "'.$code.'", status = "'.$status.'" WHERE code = "'.$fetch_code.'"';
            $update_res = mysqli_query($link, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: ./index.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }



    //-----------Login Action---------
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $password = mysqli_real_escape_string($link, $_POST['password']);
        $check_email = "SELECT * FROM user WHERE email = '".$email."'";
        $res = mysqli_query($link, $check_email) or die(mysqli_error($link));
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 1){
                  $userData = array(
                    "user_id" => $fetch['user_id'],
                    "name" => $fetch['name'],
                    "email" => $fetch['email'],
                    "password" => $fetch['password'],
                    "phone" => $fetch['phone'],
                    "created_date" => $fetch['created_date'],
                    "updated_date" => $fetch['updated_date']
                    );
                    $_SESSION['user_info']= $userData;
                    //echo "Login Success!!";*/
                    header('location:userprofile.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $check_email = "SELECT * FROM user WHERE email='$email'";
        $run_sql = mysqli_query($link, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE user SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($link, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: mashfiqrr88@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //reset otp 
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($link, $_POST['otp']);
        $check_code = "SELECT * FROM user WHERE code = $otp_code";
        $code_res = mysqli_query($link, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($link, $_POST['password']);
        $cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE user SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($link, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    

    //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login.php');
    }


    //----Edit profile button Action----
if(isset($_POST['save'])){
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);

    date_default_timezone_set("ASIA/DHAKA");
    $current_date = date('Y-m-d H:i:s');
    
    if($password != $cpassword){
      $errors['password'] = "Confirm password not matched!";
    }

        $fetch_id = $_SESSION['user_info']['user_id'];
        $check_id = "SELECT * FROM user WHERE user_id = $fetch_id";
        $run_sql = mysqli_query($link, $check_id) or die(mysqli_error($link));

    if(count($errors) == 0){
        $encpassword = password_hash($password, PASSWORD_BCRYPT);

        if(mysqli_num_rows($run_sql) > 0){
        $update_data = "UPDATE user SET name = '$name', email = '$email', phone = '$phone', password = '$encpassword', updated_date =  '$current_date' WHERE user_id = '$fetch_id'";
        $update_res = mysqli_query($link, $update_data);
       if($update_res){
                $userData = array(
                    "name" => $name,
                    "email" => $email,
                    "password" => $encpassword,
                    "phone" => $phone,
                    "updated_date" => $current_date
                    );
                    $_SESSION['user_info']= $userData;
                header('location: userprofile.php');
                exit();
            }else{
                $errors['update-error'] = "Failed while updating Profile!";
            }

          }
        
    }

  } 

  //-----Contact US------
  if(isset($_POST['contactsubmit']))
    {
        $name =mysqli_real_escape_string($link,$_POST['name']);
        $email =mysqli_real_escape_string($link,$_POST['email']);
        $subject =mysqli_real_escape_string($link,$_POST['subject']);
        $message =mysqli_real_escape_string($link,$_POST['message']);

            $sql= "INSERT INTO contact (name,email,subject,message)
            VALUES('$name', '$email', '$subject', '$message')";

            if(mysqli_query($link, $sql))
            {
                $errors['contact'] = "Successfully Send";
            }
            else
            {
                $errors['contact'] = "Something Wrong";
            }
    }




?>