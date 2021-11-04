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

   <!-- About Us -->
   <div class="container-lg text-center my-5">
    <h1>About Us</h1>
    <p class="mb-5">
      -----------<i class="fa fa-star"></i>-----------
    </p>
    <div class="row">
      <div class="col-md-6">
        <div class="service-item">
          <img src="./assets/images/history.png" width="260px" height="210px" style="border-radius: 50%;">
          <p>CarGo was founded in April 2021. The people who founded the company are professionals in their field with a lot of experience and a desire to change and improve things. Long-term experience, that is the basis of the system. The aim is not only to transform existing processes into the digital era.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item">
            <img src="./assets/images/logo.png" width="280px" height="210px" style="border-radius: 50%;">
            <p>As the automotive industry evolved, CarGo was quick to accommodate to the new standards. With the objective to solve the many issues rental companies face, our software is now used in countries around the world.The main objective is to develop future business models and strategies</p>
        </div>
      </div>        
    </div>
  </div>

  <!-- Our Team -->
  <div class="container-lg text-center mb-5">
    <h1>Our Team</h1>
    <p class="mb-5" style="margin-bottom:100px;">-----------<i class="fa fa-star"></i>-----------</p>
    <div class="row">
      <div class="col-md-4">
        <div class="service-item">
          <img src="./assets/images/onamika.jpg" width="230px" height="230px">
          <br><br>
          <h3>Onamika Hossain</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-item">
            <img src="./assets/images/dhruba.jpg" width="230px" height="230px" >
            <br><br>
          <h3>Sadia Tasnim Dhruba</h3>

        </div>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="./assets/images/nafis.jpg" width="230px" height="230px">
          <br><br>
          <h3>Md. Nafis Faiyaz</h3>
        </div>
      </div>
    </div>
  </div>

  
  <?php
    include("includes/footer.php");
  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>


</body>
</html>