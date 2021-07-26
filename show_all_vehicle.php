<?php
include("includes/db.php");
session_start();
$sql="SELECT * FROM vehicle";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE HTML>

<html>
<head>
	<title>Add New Vehicle</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<style type="text/css">
    *{
        box-sizing: border-box;
        margin:0;
        padding:0;

    }
    
    
</style>
<body>


    <div class="container">
      <div class="row">
        <div class="col-lg-2 mt-5">
          <a href="Add_new_vehicle.php" class="btn btn-info">>>Back</a>
        </div>
      <div class="col-lg-10 mt-5">
        <h2 class="text-center">Show All vehicles</h2>
            <table class="table mt-5">
            <thead>
              <th>Id</th>
              <th>Vehicle No</th>
              <th>Driver's Name</th>
              <th>Vehicle Type</th>
              <th>Expenditure</th>
              <th>Remark</th>
              <th class="text-center">Actions</th>
            </thead>
            <tbody>
                <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
             
              <tr>
                <td><?php echo $row['v_id']?></td>
                <td><?php echo $row['v_no']?></td>
                <td><?php echo $row['driver_name']?></td>
                <td><?php echo $row['v_type']?></td>
                <td><?php echo $row['v_expenditure']?></td>
                <td><?php echo $row['v_remark']?></td>
                <td class="text-center">
                  
                  <a class="btn btn-info mb-2" href=""><i class="fa fa-edit"></i> Edit</a>
                  <a class="btn btn-danger mb-2" onclick="return confirm('Are you sure?')" href=""><i class="fa fa-trash"></i> Delete</a>
                </td>

              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>
<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['error']); ?>