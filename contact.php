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
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/59ad435b01.js" crossorigin="anonymous"></script>
    </head>
    <style>
                .bg{
    background-image: url(./assets/images/contact.jpg);
    background-size: 100% auto;
    height: 500px;
    
    margin-top: 9%;
    }
.over_image {
    background-image: url(https://www.camasys.com/templates/camasys/images/rightkiller.png);
    background-size: 100%;
    background-position: bottom center;
    background-repeat: no-repeat;
    height: 250px;
    margin-top: -300px;
}
.contact-box
{
    box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 30%);
    border-radius: 3px;
    padding:20px;
    margin: 4%;
}
label{
      background-color: #e5e5e5;
    color: #1c0000;
    border-radius: 5px;
    font-weight: bold;
    padding: 5px;
    margin: 10px 0;
}

.social-icons .social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 3.00rem;
    width: 3.00rem;
    background-color: #022c65;
    color: #fff;
    border-radius: 100%;
    font-size: 1.5rem;
    margin-right: 1.5rem;
    text-decoration: none;
}

.sub1
{
    color:#022c65;
    font-size:20px;
}
    </style>
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
          <a class="nav-link" href="index.php"><i class="fas fa-home px-1"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-tags px-1"></i></i>Pricing</a>
        </li>

        <li class="nav-item">
         <a class="nav-link" href="./support.php"><i class="far fa-life-ring px-1"></i>Support</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./about.php"><i class="fas fa-users px-1"></i>About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="./contact.php"><i class="fas fa-phone-alt px-1"></i>Contact Us</a>
        </li>

        
        
      </ul>
    


    </div>
    
    <div class="col-lg-2">
      <a class="btn btn-outline-info" href="login&registration/userlogin.php">Login</a>
      <a class="btn btn-outline-info" href="login&registration/registration.php">Register</a>

    </div>
  
</div>

</nav>

<div class="bg mb-5">
    <div class="text-left">
      <h1 style="padding-top:16%;font-size:5.5rem; padding-left:3%;padding-right: 7%;">Need help?</h1>
      <button type="button" class="btn btn-info w-25 p-2 mx-4" style="font-size:1.8rem; border-radius:30px;">Contact us</button>
      
    </div>
</div>

    <div class="over_image">
    </div><br><br><br>

    <div class="container">

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
              <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px"></div>
        </div>
    </div>
<br><br>

<div class="row">
            <div class="col-lg-3 contact-box">

             <span class="sub1" style="margin-left: 40%;"><i class="fa fa-phone-square fa-4x"></i><br>
                <span style="margin-left: 22%;">Mobile number</span></span><br><br>
            <span style="margin-left:35px;">+8801775375309</span><br>
            <span style="margin-left:35px;">+8801303051468</span>
        </div>

            <div class="col-lg-3 contact-box">
              <span class="sub1" style="margin-left: 40%;"><i class="fa fa-envelope fa-4x"></i><br> <span style="margin-left: 43%;">Email</span></span><br><br>
               <span style="margin-left:30px;">sadiadhruba@gmail.com</span><br>
            <span style="margin-left:30px;">sadiatasnim@iut-dhaka.edu</span>
            </div>
            <div class="col-lg-3 contact-box">
              <span class="sub1" style="margin-left: 40%;" ><i class="fa fa-home fa-4x"></i>  
              <span style="margin-left: 35%;">Address</span></span><br><br>
               <span style="margin-left:35px;">  Gazipur,Bangladesh</span><br>
            <small style="margin-left:35px;">Islamic University of technology</small>
            </div>
        </div>
<br><br><br><br>
<h1>Send Messages to us</h1><br>
        <form  action="contact.php" method="POST">
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
            </form><br><br>
             <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/sadia-tasnim-dhruba-2a70a31a8"><i class="fa fa-linkedin"></i></a>
                        <a class="social-icon" href="https://github.com/sadiatasnimdhruba"><i class="fa fa-github"></i></a>
                        <a class="social-icon" href="https://instagram.com/sadia_tasnim_dhruba?igshid=16bu8laa3n5fr"><i class="fa fa-instagram "></i></a>
                        <a class="social-icon" href="https://www.facebook.com/sadiatasnim.dhruba"><i class="fa fa-facebook-f"></i></a>
                    </div>

            <br><br><br><br><br><br>
    


</div>
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