<?php
include("includes/db.php");
session_start();

?>
<!DOCTYPE HTML>

<html>
<head>
	<title>Add New Warehouse</title>
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
        background-image: url(IMAGES_WEB/559.jpg);
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
        margin-top: 10px;
        width:250px;
        color:white;
        font-size: 20px;
        font-weight: 700;

    }
    .ware_code{
        position: relative;
        left:200px;
        top: -37px;
        line-height:33px;
        border-radius: 6px;
        padding:0 22px;
        font-size: 16px;
        background-color: #b2dfdb;
        font-weight:40px;

        
        
    }
    .shop_code{
        position: relative;
        left:200px;
        top: -37px;
        line-height:33px;
        border-radius: 6px;
        padding:0 22px;
        font-size: 16px;
        background-color: #b2dfdb;
        font-weight:40px;
    }
    .details{
        position: relative;
        left:200px;
        top: -37px;
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
        top: -37px;
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
        top: -37px;
        line-height:33px;
        border-radius: 6px;
        padding:0 22px;
        font-size: 16px;
        background-color: #b2dfdb;
        font-weight:40px;


    }
    .remark{
        position: relative;
        left:200px;
        top: -37px;
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
  margin: 4px 2px;
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
    margin-right:20px;
   
   
}
.button2 {
    padding: 10px 24px;
    border-radius: 4px;
    margin-left:25px ;
    margin-right:20px;
    
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

    <div class="form"><h1>Add New Warehouse</h1></div>
    <div class="main">
        <form action="insert_warehouse.php" method="POST">
            
                <h2 class="w_code">Ware House Code</h2>
                <input class="ware_code" type="number" name="warehouse_code"><br>
                
            <h2 class="w_code">Shop Code</h2>
            <input class="shop_code" type="number" name="shop_code">

            <h2 class="w_code">Location Details</h2>
            <input class="details" type="text" name="location">
            
            <h2 class="w_code">Dealer's Name</h2>
            <input class="name" type="text" name="dealer_name">
            
            <h2 class="w_code">Rate(BDT)</h2>
            <input class="number" type="number" name="rate">

            <h2 class="w_code">Remark</h2>
            <input class="remark" type="text" name="remark">

           <div clss="btn">
            <button  type="submit" class="button button1">SAVE</button></form>
            <a href="menupage.php"  class="button button2">BACK</a>
            <a href="show_all_warehouse.php" class="button button3">SHOW ALL</a>
        </div> 
        </div>
        
    </div>



</body>
</html>

<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['error']); ?>