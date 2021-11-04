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
  <link rel="stylesheet" href="./assets/css/about_style.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/59ad435b01.js" crossorigin="anonymous"></script>
</head>
<body >

  <?php
    include("includes/header.php");
  ?>

  <!-- Top Image -->
  <div class="bg my-5">
    <div class="text-center">
      <h1 class="text-white p-5" style="font-size:5.5rem">
        Welcome to the new world of car rental software
      </h1>      
    </div>
  </div>

  <div class="over_image mb-5"></div>

  <!-- Making The Change -->
  <div class="container-lg text-center mb-5">
    <h2>Making The Change</h2>
    <p class="mb-5">-----------<i class="fa fa-star"></i>-----------</p>
    <div class="row">
      <div class="col-md-4 service-item">        
        <img src="./assets/images/our-mission.png"  width="350" height="200">      
        <p>As the automotive industry evolved, CarGo was quick to accommodate to the new standards. With the objective to solve the many issues rental companies face, our software is now used in countries around the world.</p>
      </div>

      <div class="col-md-4 service-item">
        <img src="./assets/images/vision.png">
        <p>CarGo uses the latest tech advancements to eliminate common issues in the car rental business. By going completely paperless, CarGo has widely broadened the spectrum of services car rental pr hard copy. We plan to continually develop our car rental software. We are always working to give our customers the best possible services available</p>
      </div>

      <div class="col-md-4 service-item">  
        <img src="./assets/images/values.png">
        <p>For people and companies - We create products that make their everyday lives better. Society - We create products e peak of our endeavour, this is our goal, their satisfaction</p>
      </div>
    </div>
  </div>

  <!-- Why CarGo -->
  <div class="container-lg">    
    <h1 class="text-center mb-5">Why You Should Consider Cargo For Your Business?</h1>
    <div class="row">
      <div class="col-lg-7">
        <span class="number">1 </span>
        <span class="desc">No more printing paper contracts and agreements. We are fully digitalized</span><br><br>

        <span class="number" style="margin-left: 3%">2 </span>
        <span class="desc">Easy to use cloud-based software. No hidden fees, no installation required.</span><br><br>

        <span class="number"  style="margin-left: 6%;">3 </span>
        <span class="desc">Pay accordingly for the number of vehicles you have.</span><br><br>

        <span class="number"  style="margin-left: 9%;">4 </span>
        <span class="desc">We specialize in improving the auto rental business.</span><br><br>

        <span class="number"  style="margin-left: 12%;">5 </span>
        <span class="desc">Customizable packages to suit every budget.</span><br><br>
        
        <span class="number"  style="margin-left: 15%;">6 </span>
        <span class="desc">Top 24/7 customer support.</span><br><br>

        <span class="number"  style="margin-left: 18%;">7 </span>
        <span class="desc">We handle everything.</span>
      </div>
      <div class="col-lg-5 mt-5">
        <img src="./assets/images/car.svg" width="500" height="300">
      </div>
          
    </div>
  </div><br><br><br><br><br><br><br>
       
  <!-- What CarGo Offer -->
  <div class="container-lg">
    <div class="row">
      <div class="col-lg-6">
        <img src="./assets/images/car1.svg" width="500" height="300">
      </div>
      <div class="col-lg-6">
        <h1>What Does Cargo Offer?</h1><br><br><br>
        <span class="number">1 </span>
        <span class="desc" style="font-weight: bold;">Car rental booking software</span><br><br>

        <span class="number" style="margin-left: 3%">2 </span>
        <span class="desc"  style="font-weight: bold;">Car rental reservation software</span><br><br>

        <span class="number"  style="margin-left: 6%;">3 </span>
        <span class="desc"  style="font-weight: bold;">Car rental management software</span><br><br>
      </div>
    </div>
  </div><br><br><br><br><br>


  <div class="row">
    <div class="col-lg-3">
      <img src="./assets/images/commitment.jpg" height="300">
    </div>
    <div class="col-lg-9">
      <h1 class="text-center">Our Price and Quality Commitment to you</h1>
      <p class="under text-center" style="margin-bottom:15px;">-----------<i class="fa fa-star"></i>-----------</p>
      <p style="font-family: cursive; margin-left:50px;" >A lot of effort has been made to include the best possible combination of business elements in our  software to give you access to the same sophisticated tools as the big players in the industry. We are always on the lookout for innovative and effective approaches to the car rental business to ensure that we provide an efficient system. We stand behind the fact that we offer the best possible price for the significant number of features available. If you are a new customer and you find another car rental software in the market with better price for the same features, all you need to do is provide us with the information and we will meet the price. Business needs may vary, so should your car rental company require customization of the software, we can offer this to you at a reasonable price. Please do not hesitate to contact us should you have any questions. We will be very happy to assist you any way we can.</p>

    </div>
  </div>
  <br><br><br><br>

  <?php
    include("includes/footer.php");
  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>


</body>
</html>