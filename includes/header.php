<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>CarGo</title>
  <link rel="shortcut icon" href="assets\images\download.png">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/59ad435b01.js" crossorigin="anonymous"></script>
  </head>

<body >

    <!-- Topbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2d2d2d!important">
      <div class="container">
        <div class="col-lg-3">
          <img class="navbar-brand" src="./assets/images/logo.png" width="100" height="80" style="border-radius: 50%;">
          <br>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        
      <div class="collapse navbar-collapse col-lg-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
          <li class="nav-item">
            <?php
              if(basename($_SERVER['PHP_SELF']) == "index.php")
              { ?>
                <a class="nav-link active" href="index.php"><i class="fas fa-home px-1"></i>Home</a>
            <?php
              }
              else
              { ?>
                <a class="nav-link" href="index.php"><i class="fas fa-home px-1"></i>Home</a>
            <?php
              } ?>
            ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-tags px-1"></i></i>Pricing</a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="./support.php"><i class="far fa-life-ring px-1"></i>Support</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./about.php"><i class="fas fa-users px-1"></i>About Us</a>
          </li>          

          <li class="nav-item">
            <a class="nav-link" href="./contact.php"><i class="fas fa-phone-alt px-1"></i>Contact Us</a>
          </li>
        </ul>
      </div>
    
      <div class="col-lg-2">
        <?php
        if(!isset($_SESSION['login']))
        {?>
            <a class="btn btn-outline-info" href="login&registration/userlogin.php">Login</a>
            <a class="btn btn-outline-info" href="login&registration/registration.php">Register</a>
        <?php }
        else
        {?>
            <a class="btn btn-outline-info" href="login&registration/userlogin.php"><?php echo $_SESSION['name']; ?></a>
            <a class="btn btn-outline-info" href="login&registration/logout.php">Logout</a>
        <?php } ?>
      </div>

      </div>
    </nav><br><br><br>