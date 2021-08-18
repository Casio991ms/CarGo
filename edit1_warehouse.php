<?php 

session_start();
include("includes/db.php");

      $id=$_GET['id'];
      
    $w_code=$_POST['w_code'];
    $shop_code=$_POST['shop_code'];
    $location=$_POST['location'];
    $dealer_name=$_POST['dealer_name'];
   $rate=$_POST['rate'];
   $remark=$_POST['remark'];



    $sql="UPDATE warehouse SET warehouse_code='$w_code',shop_code='$shop_code',dealer_name='$dealer_name',rate='$rate',remark='$remark' where warehouse_code='$id'";


    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success1']=1;
    	header("Location: show_all_warehouse.php");
        
    }
    else
    {
         $_SESSION['error']=1;
    	header("Location: edit_warehouse.php?id=".$id);
    }
?>