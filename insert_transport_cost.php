<?php 
session_start();
include("includes/db.php");





    
    $t_vehicle=$_POST['v'];
    $cost_type=$_POST['cost_type'];
    $additional_info=$_POST['additional_info'];
     $t_cost=$_POST['transport_cost'];
     $billing_date=$_POST['billing_date'];
     $t_remark=$_POST['remark'];

    


   
    $sql="INSERT INTO transport_cost values(NULL,'$t_vehicle','$cost_type','$additional_info','$t_cost','$billing_date','$t_remark')";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
        header("Location: transport_cost_management.php");
    
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: transport_cost_management.php");
    

    }
?>