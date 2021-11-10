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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/59ad435b01.js" crossorigin="anonymous"></script>

    <style>
    .careers-top{
        background-image: url(./assets/images/careers.jpg);
        /* background-size: 100% auto; */
        background-position: center;
        background-size: cover;
        height: 500px;
    }
    </style>

</head>
<body >

    <?php
      include("includes/header.php");
    ?>

    <!-- Top Image -->
    <div class="text-center careers-top my-5 position-relative">
      <p class="text-white fs-1 position-absolute top-50 start-50 translate-middle">Join Our Team</p>
    </div>
    
    <!-- Why Cargo -->
    <div class="container-lg mb-5">
      <div class="row">
        <div class="col-lg-4 d-flex align-items-center justify-content-center">
          <h3 class="">Why CarGo</h3>
        </div>
        <div class="col-lg-8">
          <p>At CarGo, you will work with the world's most talented engineers, designers and thought leaders to shape the future of car renting management.</p>
          <p>We hail from over 20 countries, speak more than 15 languages, and apply an increadible breadth and depth of experience to our work. Our roster also includes award-winning designers, math geniuses, standup comedians and many more.</p>
        </div>
      </div>
    </div>

    <!-- Benefits -->
    <div class="container-lg mb-5">
      <hr class="w-50 mb-5 mx-auto">
      <h2 class="text-center mb-3">Benefits at CarGo</h2>
      <div class="row text-center mb-5">
        <div class="col-lg-4">
          <div class="card shadow h-100">
            <i class="fas fa-first-aid fa-5x mt-2"></i>
            <div class="card-body">
              <h5 class="card-title">Healthcare</h5>
              <p class="card-text">Taking care of our team is about more than what happens in the office. We’ve got your healthcare covered so you can work with peace of mind.</p>
            </div>
          </div>          
        </div>
        <div class="col-lg-4">
          <div class="card shadow h-100">
            <i class="fas fa-heartbeat fa-5x mt-2"></i>
            <div class="card-body">
              <h5 class="card-title">Wellness</h5>
              <p class="card-text">With gym memberships, and paid volunteer time, working at Zenefits can help you find your Zen.</p>
            </div>
          </div>          
        </div>
        <div class="col-lg-4">
          <div class="card shadow h-100">
            <i class="fas fa-utensils fa-5x mt-2"></i>
            <div class="card-body">
              <h5 class="card-title">Food</h5>
              <p class="card-text">Catered lunches, snacks, seasonal produce, strong caffeine, and our fully stocked kitchens keeps everyone energized and ready to go.</p>
            </div>
          </div>          
        </div>
      </div>
      <div class="row text-center mb-5">
        <div class="col-lg-4">
          <div class="card shadow h-100">
            <i class="fas fa-suitcase-rolling fa-5x mt-2"></i>
            <div class="card-body">
              <h5 class="card-title">Vacation</h5>
              <p class="card-text">We love our work, but we know that taking time off is necessary to maintain a healthy balance. Our generous PTO plan gives you the downtime you need, when you need it.</p>
            </div>
          </div>          
        </div>
        <div class="col-lg-4">
          <div class="card shadow h-100">
            <i class="fas fa-hands-helping fa-5x mt-2"></i>
            <div class="card-body">
              <h5 class="card-title">Volunteering</h5>
              <p class="card-text">All CarGo employees are given paid Volunteer Time Off since we believe work should contribute to our communities.</p>
            </div>
          </div>          
        </div>
        <div class="col-lg-4">
          <div class="card shadow h-100">
            <i class="fas fa-baby-carriage fa-5x mt-2"></i>
            <div class="card-body">
              <h5 class="card-title">Family</h5>
              <p class="card-text">Work should help you lead the life you want--that’s why we provide 12 weeks of fully paid maternity leave and 6 weeks of fully paid paternity leave and have partnered with CLEO for their expert support and guidance.</p>
            </div>
          </div>          
        </div>
      </div>      
    </div>

    <!-- Send Your CV -->
    <div class="container-lg mb-5">
      <hr class="w-50 mb-5 mx-auto">
      
    </div>
  
    <?php
      include("includes/footer.php");
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>


</body>
</html>