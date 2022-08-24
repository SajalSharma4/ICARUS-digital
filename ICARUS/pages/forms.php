<?php
include '../config.php';
$message="";
if(isset($_POST['submit'])){
  $message="Form Submitted Successfully";
}
if(isset($_GET['logout'])){
  session_destroy();
  header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap.min.css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <title>ICARUS</title>
    <link rel = "icon" href ="../assets/images/logos/logo2.png" type = "image/x-icon">
</head>

<style>
  .form{
    margin: 10% 20% 20% 20%;
}
.col-auto{
  text-align: right;
}
.message{
  text-align: center;
}
</style>
<body>
    <script src="../assets/vendors/bootstrap/bootstrap.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <img src="../assets/images/logos/logo1.png" class="logo" title="ICARUS">
          <a class="navbar-brand fs-3" href="../index.php"><b>ICARUS</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="products.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../authentication/login.php">Subscribe and Save</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Learn</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="about.php">About Us</a></li>
                  <li><a class="dropdown-item" href="story.php">Our Story</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="reviews.php">FAQ's and Reviews</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact.php">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" title="Search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
              
              <?php if(isset($_SESSION['username'])) { ?>
                <a class="btn btn-outline-success" href="cart.php" type="button" title="Cart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg></a>
            <?php } else {?>
              <a class="btn btn-outline-success" href="../authentication/login.php" type="button" title="Cart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg></a>
            <?php } ?>            

              <?php if(isset($_SESSION['username'])) { ?>
              <a class="btn btn-outline-success" href="../authentication/user_profile.php" type="button" title=<?php echo $_SESSION['username']?>><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg></a>
            <?php } else {?>
              <a class="btn btn-outline-success" href="../authentication/login.php" type="button" title="Profile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg></a>
            <?php } ?>
            </form>
          </div>
        </div>
    </nav>

    <div class="form" method="post">
      <span class="message"><?php echo $message;?></span>
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Text</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="col-auto" method="post">
        <button type="submit" class="btn btn-primary mb-3" name="submit">Submit</button>
      </div>
    </div>
    


      <div class="footer-nav" style="background-image: url('../assets/images/branding/branding4.jpg')">
        <img src="../assets/images/logos/logo2.png" class="rounded float-end" alt="ICARUS">
        <div class="footer-left">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="../legals/terms.php">Terms & Conditions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../legals/privacy.php">Privacy Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Returns</a>
            </li>
            <li class="nav-item">
              <a class="nav-link last" href="reviews.php">FAQ's</a>
            </li>
          </ul>
      </div>
        <div class="footer-right">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="products.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forms.php">Forms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link last" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>          
      </div>


    </body>
</html>