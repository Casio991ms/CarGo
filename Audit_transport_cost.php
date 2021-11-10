<?php
    include("includes/db.php");
    session_start();
    $uid= $_SESSION['userid']; 
    if(!isset($_SESSION['login']))
    {
        header("Location: http://localhost/cargo/login&registration/userlogin.php");
        die();
    }
?>

<!DOCTYPE HTML>

<html>
<head>
	<title>Audit Transport Cost</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style type="text/css">
    *{
        box-sizing: border-box;
        margin:0;
        padding:0;

    }
    body{
        background-image: url(IMAGES_WEB/779.jpg);
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

    <?php
        include("includes/header.php");
    ?>

    <div class="form"><h1>Evaluate Transport Expenditure</h1></div>
    <div class="main">
        <form action="Audit_transport_cost.php" method="POST">
            <h2 class="w_code">Select Vehicle</h2>
                <select class="vehicle" name="vehicle" id="code">
                     <option>select a vehicle</option>

          <?php
          $get_vehicle="select * from vehicle where uid='$uid'";
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
                <input class="billdate" type="date" name="end_date">

           <div clss="btn">
               <a href="menupage.php"  class="button button2">BACK</a>
            <button type="submit" name="proceed" class="button button1">PROCEED</button></form>
        </div> 
        </div>
        
    </div>
        <?php
      if(isset($_POST['proceed']))
      {
        $vehicle=$_POST['vehicle'];
        $billing_date=$_POST['billing_date'];
        $end_date=$_POST['end_date'];

        $sql="SELECT vehicle.*,transport_cost.*
              FROM vehicle
              join transport_cost on vehicle.v_id=transport_cost.t_vehicle
              where vehicle.v_id='$vehicle' AND transport_cost.billing_date
              BETWEEN '$billing_date' AND '$end_date'";
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
              <th>Vehicle Type</th>
              <th>Cost Type</th>
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
                <td><?php echo $row['v_type']?></td>
                <td><?php echo $row['cost_type']?></td>
                <td><?php echo $row['billing_date']?></td>
                <td><?php echo $row['t_cost']+$row['v_expenditure']?></td>
                <td><?php echo $row['v_remark']?></td>
                
               

              </tr>

                <?php  }
                ?>
        </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/index_script.js"></script>

</body>
</html>