<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("Location: http://localhost/cargo/login&registration/userlogin.php");
    die();
}
include("includes/header.php");
?>

<!DOCTYPE HTML>

<html>
<head>
	<title>Main Menu</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:Arial, Helvetica, sans-serif;
   
}
.body{

    background-color:#fff;
    color:#000;
    font-size: 15px;
    line-height:1.5;
    scroll-behavior: smooth;
    transition: 1s all;
}
.main-nav .logo{
    width:26px;
    margin-left: 20px;
    margin-right: -25px;
}
a{
    text-decoration: none;
    color:#000;
}
ul{
    list-style:none;
}

.container{
    width:90%;
    max-width:1100px;
    margin:auto;
}
.main-nav{
    display:flex;
    align-items:center;
    justify-content: space-between;
    height:50px;
    padding:20px 0;
    font-size:18px;
     background-color:#b2dfdb;   
}

.main-nav ul{
    display: flex;
}

.main-nav ul li{
    padding:0 10px;
}
.main-nav ul li a{
    border-bottom: 2px;
}
.main-nav ul li a:hover{
    border-bottom:2px solid #000;
}
.main-nav ul.main-menu{
    flex:1;
    margin-left:20px;
}

.cards{
    display:grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap:30px;
    margin-top:20px;
}
.cards img{
    width:330px;
    height:200px;
    margin-bottom:20px;
    
}
.cards img:hover{
    opacity:0.7;
}
.cards h3{
    margin-bottom: 5px;
    font-weight: bold;
    font-size: 19px;
}
.cards a{
    display: inline-block;
    padding-top:12px;
    text-transform:uppercase;
    color:#0067b8;
    font-weight:bold;
    
}
.cards a:hover{
    border-bottom:2px solid #006064;
    opacity:0.9;

}
.cards a:hover i{
    margin-left:10px;
    opacity:0.9;
}

.cards .btn{
    padding-top: 5px;
    padding-left: 20px;
    cursor:pointer;
    font-size: 15px;
    color:white;
    width: 90px;
    height:30px;
    font-weight: bold;
    background-color:#006064;
    border:2px solid #006064;
    border-bottom:2px solid #006064;
    border-radius: 3px;
    font-family: 'Source Sans Pro', sans-serif;
    margin-top: 8px;
}
.cards .btn:hover{
    opacity:0.9;
}
.cards .btn1{
    padding-top: 5px;
    padding-left: 5px;
    cursor:pointer;
    font-size: 15px;
    color:white;
    width: 100px;
    height:30px;
    font-weight: bold;
    background-color:#006064;
    border:2px solid #006064;
    border-bottom:2px solid #006064;
    border-radius: 3px;
    font-family: 'Source Sans Pro', sans-serif;
    margin-top: 22px;
}
.cards .btn2{
    padding-top: 5px;
    padding-left: 5px;
    cursor:pointer;
    font-size: 15px;
    color:white;
    width: 100px;
    height:30px;
    font-weight: bold;
    background-color:#006064;
    border:2px solid #006064;
    border-bottom:2px solid #006064;
    border-radius: 3px;
    font-family: 'Source Sans Pro', sans-serif;
    margin-top: 8px;
}


</style>
<body>
        <div class="container">
                <nav class="main-nav">
                    <img class="logo" src="IMAGES_WEB\undo.png">
                    <ul class="main-menu">
                        <li><a href="index.php">Go back to Home Page</a></li>
                    </ul>
                </nav>

         <section class="cards">
                        <div id="gothere"> 
                            <img src="IMAGES_WEB\11.jpg">
                            <h3> ADD NEW WARE HOUSE</h3>
                            <p>Add details of your ware house to save for<br>future use.</p>
                            <a href="Add_warehouse.php" class="btn">ADD<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                        <div> 
                            <img src="IMAGES_WEB\calculate-cost.jpg">
                            <h3>CALCULATE YOUR COST</h3>
                            <p>Manage your cost, rate and other information.</p>
                            <a href="calculate_cost_form.php" class="btn1">MANAGE<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                        <div id="gohere"> 
                            <img src="IMAGES_WEB\3.jpg">
                            <h3>ADD NEW VEHICLE</h3>
                            <p>Add details of your vehicle to save them for the future.</p>
                            <a href="Add_new_vehicle.php" class="btn">ADD<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>

        </section>
        <section class="cards">
                            <div id="gothere"> 
                                <img src="IMAGES_WEB\22.jpg">
                                <h3>AUDIT BY DATE</h3>
                                <p>You can view the details with a date range and evaluate the performance of each vehicle.</p>
                                <a href="Audit_by_date.php" class="btn">AUDIT<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                            <div> 
                                <img src="IMAGES_WEB\1000.jpg">
                                <h3>CALCULATE TRANSPORT COST</h3>
                                <p>Manage your transport cost and other information.</p>
                                <a href="transport_cost_management.php" class="btn2">MANAGE<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                            <div id="gohere"> 
                                <img src="IMAGES_WEB\2.jpg">
                                <h3>AUDIT TRANSPORT COST</h3>
                                <p>You can view Transport cost in details with a date range.</p>
                                <a href="Audit_transport_cost.php" class="btn">AUDIT<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                
                            </div>
                            <br><br><br><br>
         </section>

</div>
	
<?php
    include("includes/footer.php");
?>