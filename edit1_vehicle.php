<?php 

session_start();
include("includes/db.php");

      $id=$_GET['id'];
      
    $v_no=$_POST['v_no'];
    $driver_name=$_POST['driver_name'];
    $v_type=$_POST['v_type'];
    $v_expenditure=$_POST['v_expenditure'];
   $v_remark=$_POST['v_remark'];



    $sql="UPDATE vehicle SET v_no='$v_no',driver_name='$driver_name',v_type='$v_type',v_expenditure='$v_expenditure',v_remark='$v_remark' where v_id='$id'";


    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success1']=1;
    	header("Location: show_all_vehicle.php");
        
    }
    else
    {
         $_SESSION['error']=1;
    	header("Location: edit_vehicle.php?id=".$id);
    }
?>