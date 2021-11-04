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
    <link rel="stylesheet" href="./assets/css/contact_style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/59ad435b01.js" crossorigin="anonymous"></script>
</head>
<body >

  <?php
    include("includes/header.php");
  ?>

  <!-- Top Background -->
  <div class="bg my-5">
    <div class="text-left">
      <h1 style="padding-top:16%;font-size:5.5rem; padding-left:3%;padding-right: 7%;">Need help?</h1>
      <a href="contact.php#sendMessage"><button type="button" class="btn btn-info w-25 p-2 mx-4" style="font-size:1.8rem; border-radius:30px;">Contact us</button></a>      
    </div>
  </div>

  <div class="over_image"></div><br><br><br>


  <!-- Get direction & map -->
  <div class="container-lg text-center mb-5">
    <div class="row">
      <div class="col-lg-5">
        <h1>Get direction to us</h1>
        <h4>Sales office</h4>
        <p>Islamic University Of Technology</p>
        <p>Board Bazar,Gazipur</p>
        <p>Bangladesh</p>
      </div>
      <div class="col-lg-6">
        <!--Google map-->
        <div id="map-container" class="shadow map-container mb-5" style="height: 400px"></div>
      </div>
    </div>
  </div>

  <!-- Number, email & address -->
  <div class="container text-center mb-5">
    <div class="row" id="sendMessage">
      <div class="col-lg-3 contact-box">
        <span class="sub1"><i class="fa fa-phone-square fa-4x"></i><br>
        <span>Mobile number</span></span><br><br>
        <span>+8801775375309</span><br>
        <span>+8801303051468</span>
      </div>

      <div class="col-lg-3 contact-box">
        <span class="sub1"><i class="fa fa-envelope fa-4x"></i><br> 
        <span>Email</span></span><br><br>
        <span>sadiadhruba@gmail.com</span><br>
        <span>sadiatasnim@iut-dhaka.edu</span>
      </div>

      <div class="col-lg-3 contact-box">
        <span class="sub1"><i class="fa fa-home fa-4x"></i> <br>
        <span style=>Address</span></span><br><br>
        <span> Gazipur,Bangladesh</span><br>
        <small>Islamic University of technology</small>
      </div>
    </div>


    <?php if(isset($_SESSION['send'])){?>
      <div class="alert alert-success" id="contact">
        <strong>Your Message sent successfully</strong>.
      </div>
    <?php }?>

  </div>

  <div class="container-lg mb-5">
    <h1>Send Messages to us</h1><br>
    <form  action="sendtext.php" method="POST">
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <label>Full Name</label>
            <input required type="text" name="fullname" class="form-control" placeholder="Enter your fullname">
          </div>
          <div class="form-group">
            <label>Mail</label>
            <input required type="mail" name="mail" class="form-control" placeholder="Enter your email address">
          </div>
          <div class="form-group">
            <label>Phone number</label>
            <input required type="text" name="phone" class="form-control" placeholder="Enter your phone number">
          </div>
        </div>

        <div class="col-md-7">
          <div class="form-group">
            <label>Message</label>
            <textarea required class="form-control" name="text" rows="8" cols="30" placeholder="Write a message"></textarea>
          </div><br>
          <div class="pull-right">
            <button class="btn btn-success p-2" type="submit">Send</button>
          </div>
        </div>     
      </div>
    </form>
  </div>

  <!-- Social Icons -->
  <div class="container-lg mb-5">
    <a class="mx-2" href="https://www.linkedin.com/in/sadia-tasnim-dhruba-2a70a31a8"><i class="fab fa-linkedin-in fa-3x"></i></a>
    <a class="mx-2" href="https://github.com/sadiatasnimdhruba"><i class="fab fa-github fa-3x"></i></a>
    <a class="mx-2" href="https://instagram.com/sadia_tasnim_dhruba?igshid=16bu8laa3n5fr"><i class="fab fa-instagram fa-3x"></i></a>
    <a class="mx-2" href="https://www.facebook.com/sadiatasnim.dhruba"><i class="fab fa-facebook fa-3x"></i></a>
  </div>

  <?php
    include("includes/footer.php");
  ?>

  <script src="https://maps.google.com/maps/api/js"></script>
  <script>
      function regular_map() {
      var var_location = new google.maps.LatLng(23.94837, 90.37930);
      var var_mapoptions = {
        center: var_location,
        zoom: 15
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title:"Islamic University Of Technology"
      });
    }

    google.maps.event.addDomListener(window, 'load', regular_map);

  </script>
</body>
</html>

<?php unset($_SESSION['send']); ?>