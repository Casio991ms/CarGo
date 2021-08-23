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

<style>
    .top-image-bg{
        background-image: url("./assets/images/support_1.jpg");
        background-size: 100% auto;
        height: 500px;
        background-color: blue;
        margin-top: 10%;
    }
    .free-demo-bg{
        background-image: url("./assets/images/support_3.jpg");
        background-size: cover;
    }
</style>

<body>
        <!-- Topbar start-->
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
                <a class="nav-link" href="index.php"><i class="fas fa-home px-1"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-tags px-1"></i></i>Pricing</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="./support.php"><i class="far fa-life-ring px-1"></i>Support</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./about.php"><i class="fas fa-users px-1"></i>About</a>
            </li>            

            <li class="nav-item">
                <a class="nav-link" href="./contact.php"><i class="fas fa-phone-alt px-1"></i>Contact Us</a>
            </li>
        </ul>
        </div>

        <div class="col-lg-2">
        <a class="btn btn-outline-info" href="login&registration/userlogin.php">Login</a>
        <a class="btn btn-outline-info" href="login&registration/registration.php">Register</a>
        </div>

        </div>
    </nav>
    <!-- Topbar end-->

    <!-- Top Image start-->
    <div class="top-image-bg mb-5">
        <h1 class="text-center p-5 m-5"style="color: #ED4145">Our team of customer service reps is dedicated to providing our loyal Navotar customers unparalleled customer service and technical support.</h1>
    </div>
    <!-- Top Image end-->

    <!-- Training start-->
    <div class="container text-center mb-5">
        <h2 class="mb-3">Training</h2>
        <p>Our training sessions and live demonstrations are FREE of charge. We provide a full guided training session to ensure our clients fully understand the CarGo software. Training videos are available as well; once you register with the solution, all our videos will be available.</p>
    </div>
    <!-- Training end-->

    <!-- Product Support start-->
    <div class="container text-center mb-5">
        <hr class="w-50 mx-auto">
        <h2 class="mb-3">Product Support</h2>
        <Request>Comprehensive technical support along with video demonstrations are available for product-related concerns. Request a one-on-one interaction with our technical team to easily resolve any usability or technical concerns you may have.</p>
    </div>
    <!-- Product Support end-->

     <!-- Version Updates start-->
     <div class="container text-center mb-5">
        <hr class="w-50 mx-auto">
        <h2 class="mb-3">Version Updates</h2>
        <Our>The CarGo development team is consistently working on new requirements and updating the system to continuously improve in stability and functionality. Our monthly releases showcase the improvements and our loyalty towards our clientele. The updates are included in the monthly fee and will be updated automatically in your respective software.</p>
    </div>
    <!-- Version Updates end -->

    <!-- Call in Support start -->
    <div class="bg-light">
        <div class="container mb-5">
            <div class="d-flex justify-content-center">
                <div class="px-4">
                    <img src="./assets/images/support_2.jpg" width="300" height="300">
                </div>
                <div class="d-flex flex-column justify-content-center px-4">
                    <h2>Call-in Support</h2>
                    <p class="fs-4">Our support engineers on stand by at</p>
                    <a class="text-info text-decoration-none fs-4" href="tel:8801531960091">+8801531960091</a>  
                </div>
            </div>
        </div>
    </div>
    <!-- Call in Support end -->

    <!-- Free Demo -->
    <div class="free-demo-bg">
        <div class="container text-center mb-5 py-5">
            <h2>Get along with CarGo to smoothen your entire rental process.</h2>
            <p class="fs-5">Works with all types of Rental Companies to track every interaction from reservations to return.</p>
            <a href="#" class="btn btn-primary mx-2">Get Free Demo</a>
        </div>
    </div>
    <!-- Free Demo -->


    <!-- Footer start-->
    <div class="bottom bg-dark">
        <div class="container-lg p-4">
            <div class="row">
            <div class="col col-lg-3">
                <h3 class="text-white">CarGo</h3>
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-light" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Software Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Our Partners</a>
                </li>
                </ul>          
            </div>

            <div class="col col-lg-3">
                <h3 class="text-white">Our Products</h3>
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">CarGo Offline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">CarGo Online</a>
                </li>
                </ul>
            </div>

            <div class="col col-lg-3">
                <h3 class="text-white">Important Links</h3>
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">About Us</a>
                </li>
                </ul>
            </div>

            <div class="col col-lg-3">
                <h3 class="text-white">Find Us</h3>
                <ul class="nav flex-column">
                <li class="nav-item">
                    <i class="fas fa-map-marker-alt text-light"></i> 
                    <span class="text-muted">Islamic University of Technology, Gazipur, Dhaka, Bangladesh</span>
                </li>
                <li class="nav-item">
                    <i class="fas fa-phone-alt text-light"></i>
                    <a class="text-light" href="tel:8801531960091">
                    +8801531960091
                    </a>            
                </li>
                <li class="nav-item">
                    <i class="fas fa-envelope text-light"></i>
                    <a class="text-light" href="mailto:customer@cargo.com">
                    customer@cargo.com
                    </a>            
                </li>
                </ul>

                <ul class="nav my-4">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                </ul>

            </div>

            </div>
            
        </div>

    </div>
    <!-- Footer end-->

</body>