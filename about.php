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
    background-image: url("https://www.camasys.com//images_camasys/cache/team-work-1600x1000.jpg");
    background-size: 100% auto;
    height: 500px;
    background-color: blue;
    margin-top: 10%;
    }

.over_image {
    background-image: url(https://www.camasys.com/templates/camasys/images/rightkiller.png);
    background-size: 100%;
    background-position: bottom center;
    background-repeat: no-repeat;
    height: 250px;
    margin-top: -300px;
}


.number
{
    background-color: #050058; 
    color:#fff;
    margin-bottom: 50px;
    margin-top: 50px;
    padding:10px;
                        
}
.desc
    {
        background-color: #91a8fd;
        margin-bottom: 50px;
        margin-top: 50px;
        padding:10px;
    }

  .service-item{
    text-align: center;
    background-color: #fff;
    padding: 30px 25px;
    margin-bottom: 30px;
    box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 30%);
  
    }



#mode
{
    width:30px;
    cursor: pointer;
}
/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: #737373;
  top: 0;
  bottom: 0;
  left: 50%;
  
}

/* Container around content */
.container1 {
  padding: 10px 40px;
  position: relative;
  width: 50%;
}



/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: #fff;
  position: relative;
  border-radius: 6px;
  box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 30%);
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container1 {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container1::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
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
          <a class="nav-link active" href="index.php"><i class="fas fa-home px-1"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-tags px-1"></i></i>Pricing</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php"><i class="fas fa-users px-1"></i>About
                </a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="support.php"><i class="far fa-life-ring px-1"></i>Support</a>
        </li>

        <li class="nav-item">
         <a class="nav-link" href="contact.php"><i class="fas fa-phone-alt px-1"></i>Contact Us</a>
        </li>

        
        
      </ul>
    


    </div>
    
    <div class="col-lg-2">
      <a class="btn btn-outline-info" href="login&registration/userlogin.php">Login</a>
      <a class="btn btn-outline-info" href="login&registration/registration.php">Register</a>

    </div>
  
</div>

</nav>


  <!-- Top Image -->

  <div class="bg mb-5">
    <div class="text-center">
      <h1 class="text-white" style="padding-top:6%;font-size:5.5rem; padding-left:7%;padding-right: 7%;">Welcome to the new world of
car rental software</h1>
      
    </div>
  </div>

    <div class="over_image">
    </div><br><br><br>
    <div class="container">
        <h1 class="text-center">About Us</h1>
         <p class="under text-center" style="margin-bottom:100px;">-----------<i class="fa fa-star"></i>-----------</p>
        <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <img src="./assets/images/history.png" width="260px" height="210px" style="border-radius: 50%;">
                <p>United Technologies Group, s.r.o. was founded in August 2016. The people who founded the company are professionals in their field with a lot of experience and a desire to change and improve things. Long-term experience, that is the basis of the system. The aim is not only to transform existing processes into the digital era.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                 <img src="./assets/images/logo.png" width="280px" height="210px" style="border-radius: 50%;"><span style="font-size:2.5rem;font-weight:bold;">Our Company</span>
                 <p>As the automotive industry evolved, Navotar was quick to accommodate to the new standards. With the objective to solve the many issues rental companies face, our software is now used in countries around the world.The main objective is to develop future business models and strategies</p>
              </div>
            </div>
            
        </div>

          </div><br><br><br>
            <div class="container">
                <h1 class="text-center">Our Team</h1>
         <p class="under text-center" style="margin-bottom:100px;">-----------<i class="fa fa-star"></i>-----------</p>
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
        </div><br><br>


     <div class="mb-5">
        
                <div>
                    <h2 class="text-center">Making the change</h2>
                     <p class="under text-center" style="margin-bottom:100px;">-----------<i class="fa fa-star"></i>-----------</p>
                     <div class="timeline">
  <div class="container1 left">
    <div class="content">
        <i class="fa fa-circle fa-2x" style="background-color:white;padding:10px;color:grey;border-radius: 50%; border:3px solid #737373; position: absolute;left:103%;z-index: 1;"></i>
      <img src="./assets/images/our-mission.png"  width="350" height="200">
      
    <p>As the automotive industry evolved, Navotar was quick to accommodate to the new standards. With the objective to solve the many issues rental companies face, our software is now used in countries around the world.

</p>
                        
    </div>
  </div>
  <div class="container1 right">
    <div class="content">
        <i class="fa fa-circle fa-2x" style="background-color:white;padding:10px;color:grey;border-radius: 50%; border:3px solid #737373; position: absolute;right:103%;z-index: 1;"></i>
      <img src="./assets/images/vision.png">
      <p>Navotar uses the latest tech advancements to eliminate common issues in the car rental business. By going completely paperless, Navotar has widely broadened the spectrum of services car rental pr hard copy. We plan to continually develop our car rental software. We are always working to give our customers the best possible services available</p>
      
  
                            </div>
  
  </div>
  <div class="container1 left">
    <div class="content">
        <i class="fa fa-circle fa-2x" style="background-color:white;padding:10px;color:grey;border-radius: 50%;border:3px solid #737373; position: absolute;left:103%;z-index: 1;" ></i>
       <img src="./assets/images/values.png">
     <p>For people and companies - We create products that make their everyday lives better.
Society - We create products e peak of our endeavour, this is our goal, their satisfaction</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
<br><br><br><br>
<div class="container">
    
            <h1>Why you should consider Cargo for your business?</h1><br><br>
            <div class="row">
         <div class="col-lg-7">
                 <span class="number">1 </span><span class="desc" style="width:1500px">No more printing paper contracts and agreements. We are fully digitalized</span><br><br>
                   <span class="number" style="margin-left: 3%">2 </span><span class="desc">Easy to use cloud-based software. No hidden fees, no installation required.</span><br><br>
                   <span class="number"  style="margin-left: 6%;">3 </span><span class="desc">
                    Pay accordingly for the number of vehicles you have.</span><br><br>
                   <span class="number"  style="margin-left: 9%;">4 </span><span class="desc">
                       We specialize in improving the auto rental business.
                   </span><br><br>
                    <span class="number"  style="margin-left: 12%;">5 </span><span class="desc">
                        Customizable packages to suit every budget.
                    </span><br><br>
                    
                    <span class="number"  style="margin-left: 15%;">6 </span><span class="desc">
                    
                Top 24/7 customer support.</span><br><br>
                    <span class="number"  style="margin-left: 18%;">7 </span><span class="desc">We handle everything.
                    </span>
                </div>
                <div class="col-lg-5 mt-5">
                    <img src="./assets/images/car.svg" width="500" height="300">
                </div>
          
        </div><br><br><br><br><br><br><br>
       
        <div class="row">
            <div class="col-lg-6">
                <img src="./assets/images/car1.svg" width="500" height="300">

            </div>
            <div class="col-lg-6">
                <h1>What does Cargo Offer?</h1><br><br><br>
                <span class="number">1 </span><span class="desc" style="font-weight: bold;">Car rental booking software</span><br><br>
                   <span class="number" style="margin-left: 3%">2 </span><span class="desc"  style="font-weight: bold;">Car rental reservation software</span><br><br>
                   <span class="number"  style="margin-left: 6%;">3 </span><span class="desc"  style="font-weight: bold;">
                    Car rental management software</span><br><br>
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
    </div><br><br><br><br>



<div class="bottom bg-dark">
    <div class="container-lg p-4">
      <div class="row">
        <div class="col col-lg-3">
          <h3 class="text-white">CarGo</h3>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Home</a>
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

  </div><!-- Bottom -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>


</body>
</html>