<?php
session_start();
include("includes/db.php");
$id=$_GET['id'];

  $delete="DELETE FROM vehicle where v_id=$id";
  if(mysqli_query($conn,$delete))
    {
    	$_SESSION['success']=1;
      header("Location: show_all_vehicle.php")  ;

    }
    else
    {
    	$_SESSION['error']=1;
      header("Location: show_all_vehicle.php")  ;
    }
?>