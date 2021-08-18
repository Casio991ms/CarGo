<?php
session_start();
include("includes/db.php");
$id=$_GET['id'];

  $delete="DELETE FROM warehouse where warehouse_code=$id";
  if(mysqli_query($conn,$delete))
    {
    	$_SESSION['success']=1;
      header("Location: show_all_warehouse.php")  ;

    }
    else
    {
    	$_SESSION['error']=1;
      header("Location: show_all_warehouse.php")  ;
    }
?>