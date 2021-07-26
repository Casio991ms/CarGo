<?php
include("includes/db.php");
session_start();


?>
<!DOCTYPE HTML>

<html>
<head>
	<title>Audit By Date</title>
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
    body{
        background-image: url(IMAGES_WEB/1001.jpg);
        background-position: center;
        background-repeat:no-repeat;
        background-size:cover;
        font-family: sans-serif;
        margin-top: 40px;  
    }
    .form{
        width:500px;
        background-color: rgb(0,0,0,0.6);
        margin:auto;
        color:#FFFFFF;
        padding:10px 0px 10px 0px;
        text-align: center;
        border-radius: 5px 5px 0px 0px;
        font-weight: bolder;
    }
    .main{
        background-color: rgb(0,0,0,0.5);
        width:500px;
        margin:auto;
        margin-bottom: 27px;

    }

    form{
        padding:10px;
    }
    code{
        width:100%;
        height:100px;
    }

    .w_code{
        margin-left: 20px;
        margin-top: 1px;
        width:260px;
        color:white;
        font-size: 20px;
        font-weight: 700;

    }
    .ware_code{
        position: relative;
        left:200px;
        top: -30px;
        line-height:33px;
        border-radius: 6px;
        padding:0 22px;
        font-size: 16px;
        background-color: #b2dfdb;
        font-weight:40px;

        
        
    }
    input[type=text],select{
        position: relative;
        left:200px;
        top: -30px;
        line-height:33px;
        border-radius: 6px;
        padding:0 22px;
        font-size: 16px;
        background-color: #b2dfdb;
        font-weight:40px;
        height: 33px;
        
    }
 

    .number{
        position: relative;
        left:200px;
        top: -30px;
        line-height:33px;
        border-radius: 6px;
        padding:0 22px;
        font-size: 16px;
        background-color: #b2dfdb;
        font-weight:40px;


    }
    .billdate{
        position: relative;
        left:200px;
        top: -30px;
        line-height:33px;
        border-radius: 6px;
        padding:0 22px;
        font-size: 16px;
        background-color: #b2dfdb;
        font-weight:40px;
        width: 243px;
    }
    .vehicle{
        position: relative;
        left:200px;
        top: -30px;
        line-height:33px;
        border-radius: 6px;
        padding:0 22px;
        font-size: 16px;
        background-color: #b2dfdb;
        font-weight:40px;
        width: 243px;
    }

  
    .button {
  background-color: #004d40;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 20px;
  margin-right: 20px;
  cursor: pointer;
  margin-top: -10px;
  margin-bottom: 2px;
  box-shadow: 0 4px #009688;
  outline: none;
  border: none;

}

.button:hover {
    opacity: 0.7;

}

.button:active {
  background-color:#004d40 ;
  box-shadow: 0 5px #009688;
  transform: translateY(4px);
}

.button1 {
    padding: 10px 24px;
    border-radius: 4px;
    margin-left:70px ;
    margin-right:50px;
   
   
}
.button2 {
    padding: 10px 24px;
    border-radius: 4px;
    margin-left:40px ;
    
    
}


</style>
<body>
    <div class="form"><h1>Evaluate Vehicle's Performance</h1></div>
    <div class="main">
        <form action="Audit_by_date.php" method="POST">
            <h2 class="w_code">Select Vehicle</h2>
                <select class="vehicle" name="vehicle" id="code">
                     <option>select a vehicle</option>

          <?php
          $get_vehicle="select * from vehicle";
          $run_vehicle=mysqli_query($conn,$get_vehicle); 
          while($row_vehicle=mysqli_fetch_array($run_vehicle))
          {
                $v_id=$row_vehicle['v_id'];
                $v_no=$row_vehicle['v_no'];
                echo "<option value='$v_id'>$v_no</option>";
          }
          ?>
                
                </select>
                <h2 class="w_code">Select Start Date</h2>
                <input class="billdate" type="date" name="billing_date">

                <h2 class="w_code">Select End Date</h2>
                <input class="billdate" type="date" name="Date">

           <div clss="btn">
            <button type="submit" name="proceed" class="button button1">PROCEED</button></form>
           <a href="menupage.php"  class="button button2">BACK</a>
        </div> 
        </div>
        
    </div>
     <?php
      if(isset($_POST['proceed']))
      {
        $vehicle=$_POST['vehicle'];
        $billing_date=$_POST['billing_date'];

        $sql="SELECT vehicle.*,calculate_cost.*
              FROM vehicle
              join calculate_cost on vehicle.v_id=calculate_cost.vehicle
              where vehicle.v_id='$vehicle'";
        $result=mysqli_query($conn,$sql);
        
      }
      else
      {
        die();
      }

  ?>

    <table class="table m-5 bg-light">
            <thead>
              <th>Vehcile No</th>
              <th>Chalan No</th>
              <th>From</th>
              <th>Destination</th>
              <th>Date</th>
              <th>Rent</th>
              <th>Remark</th>
             
              
            </thead>
             <tbody>
                <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
             
              <tr>
                <td><?php echo $row['v_no']?></td>
                <td><?php echo $row['chalan_no']?></td>
                <td><?php echo $row['from_warehouse']?></td>
                <td><?php echo $row['destination']?></td>
                <td><?php echo $row['billing_date']?></td>
                <td><?php echo $row['calculated_rant']+$row['extra_charge']?></td>
                <td><?php echo $row['v_remark']?></td>
                
               

              </tr>

                <?php  }
                ?>
        </table>



</body>
</html>

