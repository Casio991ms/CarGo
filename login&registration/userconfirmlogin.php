<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

include("../includes/db.php");
 

  $sql="SELECT * from users where email='$email' and password='$password'";

   $result=mysqli_query($conn, $sql);
   $dat=mysqli_fetch_assoc($result);
   $userid=$dat['userid'];
   $rowcount=mysqli_num_rows($result);
   if($rowcount==1)
   {
      $_SESSION['login']=true;
      $_SESSION['name']=$dat['name'];
   	  header("Location: ../index.php");
   }
   else
   {
   	 $_SESSION['error']=true;
   	header("Location: userlogin.php");
   }
   ?>