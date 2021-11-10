<?php
  session_start();
  include("includes/db.php");
  $id= $_GET['id'];

  $sql="SELECT * FROM warehouse where warehouse_code=$id";
  $result=mysqli_query($conn,$sql);

  $std=mysqli_fetch_assoc($result);
?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>CarGo</title>
  <link rel="shortcut icon" href="assets\images\download.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/59ad435b01.js" crossorigin="anonymous"></script>

  <style>
      
        
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

  <?php
    include("includes/header.php");
  ?>

  <div class="container-lg position-relative my-5">

    <div class="position-absolute top-0 end-0">
      <a class="text-dark" href="show_all_warehouse.php"><i class="far fa-times-circle fa-2x"></i></a>        
    </div>
    
    <div class="row">      
      <div class="col-lg-6 mx-auto">        
      <?php if(isset($_SESSION['error'])){?>
        <div class="alert alert-warning">
          <strong>Failed!</strong>Something wrong
        </div>
      <?php }?>
        <h2>Edit Warehouse information</h2>
        <hr>
        <form action="edit1_warehouse.php?id=<?php echo $id ?>" method="POST">
        
          <div class="form-group">
            <label>Warehouse code:</label>
            <input required type="text" class="form-control" name="w_code" placeholder="Warehouse code" value="<?php echo $std['warehouse_code'] ?>">
          </div>
            <div class="form-group">
            <label>Shop code:</label>
            <input required type="text" class="form-control" name="shop_code" placeholder="Shop code" value="<?php echo $std['shop_code'] ?>">
          </div>
            <div class="form-group">
            <label>Location Details :</label>
            <input type="text" class="form-control" name="location" placeholder="Location Details" value="<?php echo $std["location"] ?>">
          </div>
            <div class="form-group">
            <label>Dealer Name :</label>
            <input  type="text" class="form-control" name="dealer_name" placeholder="Dealer Name" value="<?php echo $std["dealer_name"] ?>">
          </div>
            <div class="form-group">
            <label>Warehouse Rate(BDT) :</label>
            <input type="text" class="form-control" name="rate" placeholder="Warehouse Rate(BDT) " value="<?php echo $std['rate'] ?>">
          </div>
                    <div class="form-group">
            <label>Warehouse Remark :</label>
            <input type="text" class="form-control" name="remark" placeholder="Warehouse remark" value="<?php echo $std['remark'] ?>">
          </div><br>
                  <br>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>

<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['success']); ?>