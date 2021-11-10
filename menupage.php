<?php
    session_start();
    if(!isset($_SESSION['login']))
    {
        header("Location: http://localhost/cargo/login&registration/userlogin.php");
        die();
    }
?>

<!DOCTYPE HTML>

<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

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

/* .container{
    width:90%;
    max-width:1100px;
    margin:auto;
} */

.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}


</style>
<body>
    <?php
        include("includes/header.php");
    ?>

    <div class="container-lg my-5">
        <div class="row my-5">
            <div class="col col-lg-4">
                <div class="card h-100">
                    <img src="IMAGES_WEB\11.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> ADD NEW WARE HOUSE</h5>
                        <p class="card-text">Add details of your ware house to save for<br>future use.</p>
                        <a href="Add_warehouse.php" class="btn btn-success">ADD<i class="fa fa-chevron-right mx-1" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card h-100">
                    <img src="IMAGES_WEB\3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">ADD NEW VEHICLE</h5>
                        <p class="card-text">Add details of your vehicle to save them for the future.</p>
                        <a href="Add_new_vehicle.php" class="btn btn-success">ADD<i class="fa fa-chevron-right mx-1" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card h-100">
                    <img src="IMAGES_WEB\calculate-cost.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">CALCULATE YOUR COST</h5>
                        <p class="card-text">Manage your cost, rate and other information.</p>
                        <a href="calculate_cost_form.php" class="btn btn-success">MANAGE<i class="fa fa-chevron-right mx-1" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col col-lg-4">
                <div class="card h-100">
                    <img src="IMAGES_WEB\22.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">AUDIT BY DATE</h5>
                        <p class="card-text">View the details with a date range and evaluate the performance of each vehicle.</p>
                        <a href="Audit_by_date.php" class="btn btn-success">AUDIT<i class="fa fa-chevron-right mx-1" aria-hidden="true"></i></a>
                    </div> 
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card h-100">
                    <img src="IMAGES_WEB\1000.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">CALCULATE TRANSPORT COST</h5>
                        <p class="card-text">Manage your transport cost and other information.</p>
                        <a href="transport_cost_management.php" class="btn btn-success">MANAGE<i class="fa fa-chevron-right mx-1" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card h-100">
                    <img src="IMAGES_WEB\2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">AUDIT TRANSPORT COST</h5>
                        <p class="card-text">You can view Transport cost in details with a date range.</p>
                        <a href="Audit_transport_cost.php" class="btn btn-success">AUDIT<i class="fa fa-chevron-right mx-1" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
<?php
    include("includes/footer.php");
?>