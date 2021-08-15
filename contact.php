<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link  rel="stylesheet" href="css/style.css"/>
    <link  rel="stylesheet" href="css/contact.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Contact Us</title>
    <script src="js/fontawesome-kit.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <!--Navigation bar-->
    <?php include ("include/navbar.php");?>
    <?php include ("include/control_user_data.php");?>

<!--Contact form-->
<div class="container">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-5">Contact Us</h2>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contactform" method="post">

                    <div class="row">
                        <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="rounded-pill form-control" required>
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email">Your Email</label>
                                <input type="text" name="email" class="rounded-pill form-control" required>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" class="rounded-pill form-control" required>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Your Message</label>
                                <textarea type="text" name="message" rows="3" class="rounded-pill form-control md-textarea" required></textarea>
                                
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="text-center text-md-left mt-4">
                        <button class="rounded-pill btn btn-color slide-btn" type="submit" name="contactsubmit">Submit</button>
                        
                    </div>
                    
                </form>
                
            </div>

            <div class="col-md-3 text-center text-primary bg-org">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p class="text-dark"> 1234, Abcd, BD</p></li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p class="text-dark">+880-123-4567-890</p></li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p class="text-dark">zippershop@gmail.com</p></li>
                </ul>
            </div>
        </div>
    </section>
</div>

    <!--Footer-->
      <?php include ("include/footer.php");?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>