<?php 
session_start();
include("includes/db.php");

    $uid= $_SESSION['userid']; 
    $warehouse_code=$_POST['warehouse_code'];
    $shop_code=$_POST['shop_code'];
    $location=$_POST['location'];
    $dealer_name=$_POST['dealer_name'];
     $rate=$_POST['rate'];
     $remark=$_POST['remark'];


   
    $sql="INSERT INTO warehouse values('$warehouse_code','$uid','$shop_code','$location','$dealer_name','$rate','$remark')";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
        header("Location: Add_warehouse.php");
    
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: Add_warehouse.php");
    

    }
?>