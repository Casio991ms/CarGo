<?php
session_start();
include("includes/db.php");

   $id= $_GET['id'];

  $sql="SELECT * FROM vehicle where v_id=$id";
  $result=mysqli_query($conn,$sql);

  $std=mysqli_fetch_assoc($result);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
        <style>
      
        body{
      display: flex;
      flex-direction: column;
      height: 100vh;
      align-items: center;
      background-image: url('login.jpg');
      background-size: cover;
      background-position: top center;
      font-family: sans-serif;
  }
.form-control
{
 background-color: #d6dcff;
     border: 1.5px solid #09427c;


  }
  hr
  {
    color: #0d0f1a;
    padding: 1.2px;
  }

  label{
      background-color: #d5faff;
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

    </style>
  </head>
  <body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(2 67 147));">
    <br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info mb-2" href="show_all_vehicle.php">All vehicle list</a>
          <br><br><br><br><br>
          
        </div>
        <div class="col-md-9">
         
        <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-warning">
            <strong>Failed!</strong>Something wrong
          </div>
        <?php }?>
          <h2>Edit Vehicle information</h2>
          <hr>
          <form action="edit1_vehicle.php?id=<?php echo $id ?>" method="POST">
         
            <div class="form-group">
              <label>Vehicle No:</label>
              <input required type="text" class="form-control" name="v_no" placeholder="Vehicle No." value="<?php echo $std['v_no'] ?>">
            </div>
             <div class="form-group">
              <label>Driver's Name :</label>
              <input type="text" class="form-control" name="driver_name" placeholder="Driver's name" value="<?php echo $std["driver_name"] ?>">
            </div>
             <div class="form-group">
              <label>Vehicle Type :</label>
              <input  type="text" class="form-control" name="v_type" placeholder="Vehicle Type" value="<?php echo $std["v_type"] ?>">
            </div>
             <div class="form-group">
              <label>Vehicle Expenditure :</label>
              <input type="text" class="form-control" name="v_expenditure" placeholder="Vehicle Expenditure" value="<?php echo $std['v_expenditure'] ?>">
            </div>
                     <div class="form-group">
              <label>Vehicle Remark :</label>
              <input type="text" class="form-control" name="v_remark" placeholder="Vehicle remark" value="<?php echo $std['v_remark'] ?>">
            </div><br>
                    <br>
           <button type="submit" class="btn btn-primary">Submit</button><br><br><br><br>
          </form>
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>

<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['success']); ?>