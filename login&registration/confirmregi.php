<?php 

 	session_start();
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['confirm_password'];

   if(strlen($password)<5)
   {
    $_SESSION['error_msg']="Your password must be at least 5 characters!";
    header("Location: registration.php");
    die();
   }

   if($password != $confirmpassword)
   {
  
   	$_SESSION['error_msg']="Password didn't match!";
   	header("Location: registration.php");
   }
   else{

   include("../includes/db.php");

     $sql1="SELECT * from users where email='$email'";

   $result1=mysqli_query($conn, $sql1);

   $rowcount=mysqli_num_rows($result1);

     if($rowcount==1)
   {
  
   	 $_SESSION['error_msg']="Account already exists!";
   	 header("Location: registration.php");
   }
   else{

   $sql="INSERT INTO users values(NULL,'$name','$email','$password')";
  



            if(mysqli_query($conn,$sql))
   {
   
        $_SESSION['regi_msg']=" Please verify your email address!";
        $_SESSION['verify']=" Your email is verified! Please login.";
        header("Location: registration.php");
        echo "hi";
   }
   else{
    echo "hi";
   }

      }

  


}
   ?>