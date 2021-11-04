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
    <link rel="stylesheet" href="assets/css/pricing_style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/59ad435b01.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include("includes/header.php");
    ?>

    <!-- Top Text -->  
    <div class="container-lg text-center my-5">
        <p class="text-black-50 fs-6">Simple Pricing</p>
        <h2>Choose Your Plan</h2>
        <hr class="w-25 mx-auto">
        <p class="fs-6">No guesswork — just straight-forward pricing that aligns with your business goals.</p>
    </div>

    <!-- Toggle Switch -->
    <div class="container-lg text-center mb-5">
        <div class="d-flex justify-content-center">
            <span class="fs-4 px-3">Monthly</span>
            <label class="switch">
                <input type="checkbox" class="info" onclick="change(this)">
                <span class="slider round"></span>
            </label>
            <div class="d-flex flex-column justify-content-center">
                <span class="fs-4 px-3">Yearly</span>
                <span class="fs-6 text-info">(save upto 16%)</span>
            </div>
        </div>
        
    </div>

    <!-- Price Cards -->
    <div class="container-lg mb-5">
        <div class="row">
            <div class="col col-sm-6 col-lg-4">
                <div class="card shadow h-100 ">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="fs-3 fw-bold card-title">Basic</h5>
                        <span class="fs-4 fw-bold card-text">Free</span>
                        <hr>
                        <span class="fs-6 fw-bold card-text">+10%</span>
                        <span class="card-text">of the recovered revenue</span>
                        <hr>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <i class="fas fa-check"></i>
                            <span class="p-3">Upto 10 Cars</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Upto 1 Warehouses</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Fleet Management</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Online Payment</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Real-Time Analysis</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check"></i>
                            <span class="p-3">24/7 Access to CarGo Network of Experts</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Email & Chat Support</span>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col col-sm-6 col-lg-4">
                <div class="card shadow h-100 border border-info">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="fs-3 fw-bold card-title">Growth</h5>
                        <div id="growth">                            
                            <span class="fs-4 fw-bold card-text">$49</span>
                            <span class="card-text">/month</span>
                        </div>
                        <hr>
                        <span class="fs-6 fw-bold card-text">+5%</span>
                        <span class="card-text">of the recovered revenue</span>
                        <hr>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <i class="fas fa-check"></i>
                            <span class="p-3">Upto 50 Cars</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Upto 5 Warehouses</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Fleet Management</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Online Payment</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Mobile App</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Real-Time Analysis</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check"></i>
                            <span class="p-3">24/7 Access to CarGo Network of Experts</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Email & Chat Support</span>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col col-sm-6 col-lg-4">
                <div class="card shadow h-100 ">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="fs-3 fw-bold card-title">Pro</h5>
                        <div id="pro">
                            <span class="fs-4 fw-bold card-text">$99</span>
                            <span class="card-text">/month</span>
                        </div>
                        <hr>
                        <!-- <span class="fs-6 fw-bold card-text">+5%</span> -->
                        <span class="card-text">Requires annual commitment</span>
                        <hr>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <i class="fas fa-check"></i>
                            <span class="p-3">Unlimited Cars</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Unlimited Warehouses</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Fleet Management</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Online Payment</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Mobile App</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Digital Signature</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Real-Time Analysis</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check"></i>
                            <span class="p-3">24/7 Access to CarGo Network of Experts</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check text-start"></i>
                            <span class="p-3">Email & Chat Support</span>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    <div class="container-lg text-center mb-5">
        <p class="fs-6">Don't hesitate to <a href="./contact.php" class="text-decoration-none">contact us</a> if you have any questions about our pricing plans. We're here to help.</p>
    </div>

    <?php
        include("includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/pricing_script.js"></script>

</body>
</html>