<?php
session_start();
include("../includes/db.php");

if($conn)
{
  $sql="SELECT * FROM users";
  $result=mysqli_query($conn,$sql);

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Cargo</title>
    <style>
      

.form-control
{
 background-color: #f2f4ff;
     border: 1.5px solid #09427c;


  }
  hr
  {
    color: #0d0f1a;
    padding: 1.2px;
  }

  label{
    
    color: #080858;
    border-radius: 5px;
    font-weight: bold;
    padding: 5px;
    margin: 10px 0;
}
h2
{
      font-weight: bold;
    color: #06075e;
}
.link
{
  margin:0 10px;
}

.box
{
  background-color: #f5f6f7;
  padding:20px 40px;
  width:50%;
 box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 30%);
}

    </style>
  
  </head>
  <body>
    <br><br><br>

    <div class="container box">
      <div class="row" style="margin-left: 120px;">
        <div class="col-md-8 mt-4">

             <?php if(isset($_SESSION['error'])) { ?>
          <div class="alert alert-warning">
            <strong>Warning!</strong> Wrong email address and password.
          </div>
        <?php } ?>
        <?php if(isset($_SESSION['warning'])) { ?>
          <div class="alert alert-warning">
            <strong>Please login to order something!</strong>
          </div>
        <?php } ?>

             

        <?php if(isset($_SESSION['recover'])) { ?>
          <div class="alert alert-success">
            <strong>Your password successfully sent to <?php echo $_SESSION['recover']; ?> </strong>
          </div>
        <?php } ?>
        <?php if(isset($_SESSION['fail'])) { ?>
          <div class="alert alert-warning">
            <strong>Sorry! </strong>Your email doesn't match any account
          </div>
        <?php } ?>


          <h2>Login</h2>
          <hr>
          <form action="userconfirmlogin.php" method="POST">
            <div class="form-group">
              <label>Email :</label><br>
              <input required type="email" class="form-control" name="email" placeholder="Email address">
            </div><br>
                    <div class="form-group">
              <label>Password :</label><br>
              <input type="password" class="form-control" name="password" placeholder="Type a password">
            </div><br>
            
            <button type="submit" class="btn btn-link" name="submit1">Forgot password?</button><br><br>
          
           <button type="submit" class="btn btn-primary link">Submit</button>
           <a class="btn btn-body link"  href="registration.php">Create new account</a>
          </form>
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['warning']); ?>
<?php unset($_SESSION['error_msg']); ?>
<?php unset($_SESSION['recover']); ?>
<?php unset($_SESSION['fail']); ?>