<?php
include("includes/db.php");
session_start();

?>

<!DOCTYPE HTML>

<html>
<head>
	<title>Calculate Transport Cost</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>
<style type="text/css">
    *{
        box-sizing: border-box;
        margin:0;
        padding:0;

    }
    body{
        background-image: url(IMAGES_WEB/777.jpg);
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
    .details{
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
    .name{
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

    .remark{
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

    .button {
  background-color: #004d40;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
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
    margin-left:24px ;
    margin-right:25px;
   
   
}
.button2 {
    padding: 10px 24px;
    border-radius: 4px;
    margin-left:25px ;
    margin-right:25px;
    
}
.button3 {
    padding: 10px 24px;
    border-radius: 4px;
    margin-left:25px ;
    margin-right:20px;
    
}
.success, .error
        {
            color :#fff;
            
            padding :10px;
            width:30%;
            margin:auto;
            margin-bottom: 2%;

        }
        .success
        {
            background-color: green;
        }
        .error
        {
            background-color: red;
        }


</style>
<body>

     <div>
            <?php if(isset($_SESSION['error'])){?>
          <div class="error">
            <strong>Failed!</strong> Something wrong.
          </div>
          <?php }?>
          
      </div>

      <div>
             <?php if(isset($_SESSION['success'])){?>
          <div class="success">
            <strong>Sucessfully inserted</strong>
          </div>
           <?php }?>
      </div>


    <div class="form"><h1>Calculate Your Cost</h1></div>
    <div class="main">
        <form action="insert_transport_cost.php" method="POST">
            <h2 class="w_code">Vehicle</h2>
             <select class="vehicle" name="v" id="code">
             <option>select a vehicle</option>

          <?php
          $get_vehicle="select * from vehicle";
          $run_vehicle=mysqli_query($conn,$get_vehicle); 
          while($row_vehicle=mysqli_fetch_array($run_vehicle))
          {
                $v_id=$row_vehicle['v_id'];
                $v_no=$row_vehicle['v_no'];
                echo "<option value='$v_id'>$v_no</option>";
          } ?>
                
                </select>


                <h2 class="w_code">Cost Type</h2>
                <input class="ware_code" type="text" name="cost_type"><br>

            <div id="code">
                <h2 class="w_code">Additional Info</h2>
                <input class="ware_code" type="text" name="additional_info"><br>
                </div>
                
            <h2 class="w_code">Transport Cost</h2>
            <input class="name" type="Number" name="transport_cost">
            

            <h2 class="w_code">Billing Date</h2>
            <input class="billdate" type="date" name="billing_date">

            

            <h2 class="w_code">Remark</h2>
            <input class="remark" type="text" name="remark">

           <div clss="btn">
            <button type="submit"  name="vehicle"class="button button2">SAVE</button>
            <a href="menupage.php"  class="button button1">BACK</a>
            
        </div> 
        </div>
        </form>
    </div>



</body>
</html>

<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['error']); ?>