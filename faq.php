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
        .top-text{
            background-color: #0C71C3;
        }
    </style>

</head>
<body >

    <?php
        include("includes/header.php");
    ?>

    <!-- Top Text -->
    <div class="top-text pt-5 pb-3">
        <div class="container-lg">
            <p class="fs-1 text-white">Frequently Asked Questions</p>
        </div>
    </div>

    <!-- Questions -->
    <div class="container-lg d-grid gap-2 my-5">
        <button class="btn btn-light text-start" type="button" data-bs-toggle="collapse" data-bs-target=".q1" aria-expanded="false">How do I add new vehicle?</button>
        <div class="collapse q1 ms-5">
            You can add new vehicles from the "Add New Vehicle" option.
        </div>

        <button class="btn btn-light text-start" type="button" data-bs-toggle="collapse" data-bs-target=".q2" aria-expanded="false">How do I add new warehouse?</button>
        <div class="collapse q2 ms-5">
            You can add new warehouses from the "Add New Warehouse" option.
        </div>

        <button class="btn btn-light text-start" type="button" data-bs-toggle="collapse" data-bs-target=".q3" aria-expanded="false">Q3</button>
        <div class="collapse q3 ms-5">
            The Cool Joss Answer to Question 3
        </div>

        <button class="btn btn-light text-start" type="button" data-bs-toggle="collapse" data-bs-target=".q4" aria-expanded="false">Q4</button>
        <div class="collapse q4 ms-5">
            The Cool Joss Answer to Question 4
        </div>

        <button class="btn btn-light text-start" type="button" data-bs-toggle="collapse" data-bs-target=".q5" aria-expanded="false">Q5</button>
        <div class="collapse q5 ms-5">
            The Cool Joss Answer to Question 5
        </div>

        <button class="btn btn-light text-start" type="button" data-bs-toggle="collapse" data-bs-target=".q6" aria-expanded="false">Q6</button>
        <div class="collapse q6 ms-5">
            The Cool Joss Answer to Question 6
        </div>

        <button class="btn btn-light text-start" type="button" data-bs-toggle="collapse" data-bs-target=".q7" aria-expanded="false">Will I get charged for using your online service?</button>
        <div class="collapse q7 ms-5">
            No. You will not get charged anything as long as you stay within Basic Price Plan. Check <a href="./pricing.php" class="text-decoration-none">pricing page</a> for details.
        </div>
    </div>

    <!-- Still have questions? -->
    <div class="container-lg mb-5 text-center">
        <span class="fw-bold">Still have questions?</span>
        <p>Fill free to <a href="./contact.php" class="text-decoration-none">contact us</a> and our manager will answer you</p>
    </div>

    <?php
        include("includes/footer.php");
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>


</body>
</html>