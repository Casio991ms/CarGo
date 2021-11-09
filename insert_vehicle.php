<?php 
session_start();
include("includes/db.php");



$uid= $_SESSION['userid'];  
    $v_no=$_POST['v_no'];
    $drivername=$_POST['driver_name'];
    $v_type=$_POST['v_type'];
    $v_expenditure=$_POST['v_expenditure'];
   $v_remark=$_POST['v_remark'];


   
    $sql="INSERT INTO vehicle values(NULL,'$uid','$v_no','$drivername','$v_type','$v_expenditure','$v_remark')";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success']=1;
        header("Location: Add_new_vehicle.php");
        echo "hi";
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: Add_new_vehicle.php");
        echo "no hi";

    }
?>