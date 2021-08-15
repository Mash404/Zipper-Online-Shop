<?php session_start();
  //$_SESSION['total'];
  ?>
            <!--Navigation bar-->
      <nav class="navbar navbar-expand-sm navbar-dark bg-black">
  <div class="container-fluid">
    <a class="navbar-brand px-5" href="index.php">ZIPPER SHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link pr-5" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link pr-5" aria-current="page" href="./product.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pr-5" href="./about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pr-5" href="./contact.php">Contact</a>
        </li>

        <?php if(isset($_SESSION['user_info'])){  ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" style="background-color: darkgray;" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./userprofile.php">Profile</a></li>
            <li><a class="dropdown-item" href="./editprofile.php">Edit Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./logout.php">logout</a></li>
          </ul>
        </li>
      <?php }
            else{
       ?>
        <li class="nav-item">
          <button class="nav-link btn btn-color slide-btn bt-sm"><a style="color: #343a40; text-decoration: none;" href="./login.php">Login</a> </button>
        </li>
      <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart fa-2x"></i></a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>-->
      </ul>
    </div>
  </div>
</nav>