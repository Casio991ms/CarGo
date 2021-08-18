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
    <style>

.icons
{
    position: fixed;
    top: 30%;
    left: 0%;
    width: 200px;
    display: flex;
    flex-direction: column;
}
.icons a
{
    text-decoration: none;
    padding: 10px;
    font-size: 20px;
    font-family:'oswald',sans-serif;
    margin: 2px;
    text-align: right;
    border-radius: 0px 50px 50px 0px;
    transform: translate(-140px, 0px);
    transition: all 1.0s;
}
.icons a:hover
{
    transform: translate(0px, 0px);
    box-shadow: 0 0 12px rgb(109, 109, 109);

}
.icons a i
{
    margin-left: 25px;
    background-color: white;
    height: 40px;
    width: 40px;
    color: black;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    transition: all 1.0s;
}
.icons a:hover i
{
    transform: rotate(360deg);
}
.icons a i.fa-facebook-f
{
    color: #2C80D3;
    size: 5px;
}
.icons a i.fa-twitter
{
    color: #53c5ff;
}
.icons a i.fa-instagram
{
    color: #ea4c89;

}
.icons a i.fa-linkedin
{
    color: #0077B5;
}
.icons a i.fa-whatsapp
{
    color: #25D366;
}
.icons a i.fa-youtube
{
    color: #fa0910;
}
.facebook
{
    background-color: #2C80D3;
    color: #fff;
}
.twitter
{
    background-color: #53c5ff;
    color: white;
}
.instagram
{
    background-color: #ea4c89;
    color: white;
}
.linkedin
{
    background-color: #0077B5;
    color: white;
}
.whatsapp
{
    background-color: #25D366;
    color: white;
}
.youtube
{
    background-color: #fa0910;
    color: white;
}
</style>
</head>

<body >

  <!-- Topbar -->
  <div class="mb-5">
    <div class="container-lg d-flex align-items-center">
        <a class="navbar-brand" href="index.html"><img src="assets\images\logo.png" alt=""></a>
      
        <div class="ms-auto"><a class="nav-link" href="login&registration/userlogin.php">Login</a></div>
        |
        <div><a class="nav-link" href="login&registration/registration.php">Register</a></div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-lg container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.html"><i class="fas fa-home px-1"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-tags px-1"></i></i>Pricing</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-users px-1"></i>About
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Software Reviews</a></li>
                  <li><a class="dropdown-item" href="#">Our Partners</a></li>
                  <li><a class="dropdown-item" href="#">Careers</a></li>
                  <li><a class="dropdown-item" href="#">FAQ</a></li>
                  <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                  <li><a class="dropdown-item" href="#">About Us</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-life-ring px-1"></i>Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-phone-alt px-1"></i>Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
  </div> 



  <!-- Top Image -->

  <div class="home-top mb-5">
    <div id="text-in-left" class="text-center">
      <h2 class="text-white m-5">AUTOMATE THE MANAGEMENT OF YOUR FLEET</h2>
      <button type="button" class="btn btn-light w-25 p-2 mx-4">Download</button>
      <button type="button" class="btn btn-primary w-25 p-2 mx-4">Use Now</button>
    </div>
  </div>
<div class="icons">
         <a href=""class="facebook"><span class="text-light">Facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="" class="twitter">Twitter<i class="fa fa-twitter"></i></a>
         <a href="" class="instagram">Instagram<i class="fa fa-instagram"></i></a>
         <a href="" class="linkedin"><span class="text-light">LinkedIn</span><i class="fa fa-linkedin"></i></a>
         <a href="" class="whatsapp">WhatsApp<i class="fa fa-whatsapp"></i></a>
         <a href="" class="youtube">Youtube<i class="fa fa-youtube"></i></a>
      </div>

  <!-- Features -->
  <div class="container-lg text-center features mb-5">
    <h2 class="mb-3">Choose the Best Car Rental System for your Business</h2>
    <div class="row">
      <div class="col col-sm-6 col-lg-4 mb-5">
        <div class="card shadow h-100 ">
          <i class="fas fa-cloud fa-5x mt-2"></i>
          <div class="card-body">
            <h5 class="card-title">Cloud Based</h5>
            <p class="card-text">Immediate access from anywhere</p>
          </div>
        </div>
      </div>

      <div class="col col-sm-6 col-lg-4 mb-5">
        <div class="card shadow h-100 mb-5">
          <i class="far fa-window-maximize fa-5x mt-2"></i>
          <div class="card-body">
            <h5 class="card-title">Management Dashboard</h5>
            <p class="card-text">All vehicles specifications at a glance</p>
          </div>
        </div>
      </div>

      <div class="col col-sm-6 col-lg-4 mb-5">
        <div class="card shadow h-100 mb-5">
          <i class="fas fa-history fa-5x mt-2"></i>
          <div class="card-body">
            <h5 class="card-title">History</h5>
            <p class="card-text">Now you don't need a time machine anymore</p>
          </div>
        </div>
      </div>

      <div class="col col-sm-6 col-lg-4 mb-5">
        <div class="card shadow h-100 mb-5">
          <i class="fas fa-business-time fa-5x mt-2"></i>
          <div class="card-body">
            <h5 class="card-title">Business Growth Potential</h5>
            <p class="card-text">CarGo enables you to provide better services to your customers</p>
          </div>
        </div>
      </div>

      <div class="col col-sm-6 col-lg-4 mb-5">
        <div class="card shadow h-100 mb-5">
          <i class="fas fa-envelope-open-text fa-5x mt-2"></i>
          <div class="card-body">
            <h5 class="card-title">Instant Notification</h5>
            <p class="card-text">Automatically get update about every vehicle</p>
          </div>
        </div>
      </div>

      <div class="col col-sm-6 col-lg-4 mb-5">
        <div class="card shadow h-100 mb-5">
          <i class="fas fa-chart-bar fa-5x mt-2"></i>
          <div class="card-body">
            <h5 class="card-title">Statistics</h5>
            <p class="card-text">CarGo has rental statistics and statistics revenue from rentals.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- One Plaform -->
  <div class="one-platform mb-5">
    <div class="container-lg">
      <h1 class="text-white  text-center mb-3 p-2">Use one platform to manage your fleet, customers, and your business</h1>

      <div class="row">
        <div class="col col-lg-6 mb-5">
          <img src="assets/images/screenshots.PNG" class="position-relative top-50 start-50 translate-middle w-75 h-75" alt="">
        </div>
        <div class="col col-lg-6 mb-5 d-flex flex-column justify-content-center">
          <!-- <div class="d-flex flex-column justify-content-evenly"> -->
            <h3 class="text-white mb-3 p-2">Focus on improving the rental process and the management of vehicles.</h3>
            <h5 class="text-white mb-3 p-2">The days of tedious paperwork are over. Managing your car rental company has never been easier. Don’t waste time with mundane paperwork; use your time to improve your business and let us handle the rest.</h5>
          <!-- </div> -->
        </div>
      </div>

    </div>

  </div><!-- One Plaform -->

  
  <!-- Software Reviews -->
  <div class="container-lg mb-5">
    <hr class="w-50 mx-auto">
    <h2 class="text-center mb-3">Reviews</h2>
    <figure>
      <blockquote class="blockquote">
        <p>This cloud based approach is very cost effective, affordable and it saves us so much time, just amazing company to work and grow with.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Chris W. in <cite title="Source Title">theperimeter.uk</cite>
      </figcaption>
    </figure>
    
    <figure>
      <blockquote class="blockquote">
        <p>It has helped us a lot in the operation taking in consideration that the rent a car business has a lot of work to be done so is very important to use a very good system like CarGo is.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Sergio R. in <cite title="Source Title">capterra</cite>
      </figcaption>
    </figure>

    <div class="hidden-reviews" style="display: none;">

      <figure>
        <blockquote class="blockquote">
          <p>It was a pleasant experience with very professional and friendly customer service backup.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Jeffrey L. in <cite title="Source Title">ConsumerDemocracy.com</cite>
        </figcaption>
      </figure>

      <figure>
        <blockquote class="blockquote">
          <p>Excellent product with excellent team with great support, so far the best system</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Rohit N. in <cite title="Source Title">Complaints.com</cite>
        </figcaption>
      </figure>
      
      <figure>
        <blockquote class="blockquote">
          <p>Awesome auto rental platform for online and contactless operations</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          John S. in <cite title="Source Title">planetfeedback.com</cite>
        </figcaption>
      </figure>
    </div>
    
    <div class="text-center">
      <button type="button" id="view-more-reviews-btn" class="btn btn-primary" onclick="viewMoreReviews()"><i class="fas fa-chevron-down"></i> View More</button>
    </div>
  </div><!-- Software Reviews -->


  
  <!-- Partners -->
  <div class="container-lg mb-5">
    <hr class="w-50 mx-auto">
    <h2 class="text-center mb-3">Our Partners</h2>
    <div class="row">
      <div class="col col-sm-6 col-lg-3">
        <img src="assets/images/autorentals.jpg" alt="">
      </div>
      <div class="col col-sm-6 col-lg-3">
        <img src="assets/images/acaunt.jpg" alt="">
      </div>
      <div class="col col-sm-6 col-lg-3">
        <img src="assets/images/crx.jpg" alt="">
      </div>
      <div class="col col-sm-6 col-lg-3">
        <img src="assets/images/monerix.jpg" alt="">
      </div>
      <div class="col col-sm-6 col-lg-4">
        <img src="assets/images/paypal.jpg" alt="">
      </div>
      <div class="col col-sm-6 col-lg-4">
        <img src="assets/images/quikbok.jpg" alt="">
      </div>
      <div class="col col-sm-6 col-lg-4">
        <img src="assets/images/twilo.jpg" alt="">
      </div>
    </div>
  </div><!-- Partners -->


  <!-- Bottom Carousel -->
  <div class="bottomCarousel pt-5">
    <div id="carouselExampleIndicators" class="carousel slide container-lg text-center mb-5" data-bs-ride="carousel">
      <h2 class="text-white mb-3">Improve the way you rent cars with CarGo Car Rental Software</h2>
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card mb-5">
            <div class="card-body">
              <h5 class="card-title">Run your car rental business as efficiently as possible.</h5>
              <a href="#" class="btn btn-primary mx-2">Download</a>              
              <a href="#" class="btn btn-primary mx-2">Use Now</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card mb-5">
            <div class="card-body">
              <h5 class="card-title">Optimize your time and increase your company's revenues with CarGo.</h5>
              <a href="#" class="btn btn-primary mx-2">Download</a>
              <a href="#" class="btn btn-primary mx-2">Use Now</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card mb-5">
            <div class="card-body">
              <h5 class="card-title">Download to evaluate all the benefits of our software right now.</h5>
              <a href="#" class="btn btn-primary mx-2">Download</a>
              <a href="#" class="btn btn-primary mx-2">Use Now</a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div><!-- Bottom Carousel -->

  <!-- Bottom -->
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