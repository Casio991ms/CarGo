<?php 
session_start();
include("includes/db.php");





    
    $chalan_no=$_POST['chalan_no'];
    $from_warehouse=$_POST['from'];
    $destination=$_POST['destination'];
    $extra_charge=$_POST['extra_charge'];
     $rate=$_POST['rate'];
     $billing_date=$_POST['billing_date'];
     $vehicle=$_POST['vehicle'];
     $remark=$_POST['remark'];


   
    $sql="INSERT INTO calculate_cost values('$chalan_no','$from_warehouse','$destination','$extra_charge','$rate','$billing_date','$vehicle','$remark')";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
        header("Location: Calculate_cost_form.php");
    
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: Calculate_cost_form.php");
    

    }
?>