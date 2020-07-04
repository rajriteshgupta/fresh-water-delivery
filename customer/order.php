<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>order</title>
	<link rel="stylesheet" type="text/css" href="../css/orderstyle.css">
</head>
<body>
	<h1 style="background-color:green; height: 50px;
	width: 200px; margin: 10px; border-radius: 5px; text-align: center;
	"><a href="http://localhost/project/watersuplies.html">< GO BACK</a></h1>
     <h1 align="center">ORDER NOW</h1>
     <div id="orderform">
          <form action="order.php" method="POST">
          	<label>Enter your email:</label><br>
            <input type="email" name="uemail" required><br>
            <label>Enter your area code:</label><br>
            <input type="text" name="areacode" required><br>
            <label>select your order type:</label>
                    <select name="ordertype" placeholder="select">
                      <option value="instant">instant order</option>
                      <option value="scheduled">scheduled order</option>
                      <option value="bulk">bulk order</option>
                
                    </select>

             <label>select your water type:</label>
                   <select name="watertype" placeholder="select">
                      <option value="20">ISI-PURIFY-WATER-20 Ltr(₹ 28.00)</option>
                      <option value="10">ISI-PURIFY-WATER-10 Ltr(₹ 20.00)</option>
                      <option value="5">ISI-PURIFY-WATER-5 Ltr(₹ 12.00)</option>
                
                   </select>
           
            <input type="submit" name="submit" value="Get order" style="background-color:blue; color: white;">
            
          </form>


     </div>



<?php
     include("../dbconn.php");

   if(isset($_POST['submit'])){

   $uemail=$_POST['uemail'];
   $areacode=$_POST['areacode'];
   $ordertype=$_POST['ordertype'];
   $watertype=$_POST['watertype'];
  
  $qry="INSERT INTO `order`(`uemail`, `areacode`, `ordertype`, `watertype`) VALUES ('$uemail','$areacode','$ordertype','$watertype')";
    
     $run=mysqli_query($conn,$qry);
 
    if($run)
  {
     
        ?>
    <script>
    alert('Request send successfully');
    </script>

   <?php
 
  }
  else
  {
    ?>
    <script>
    alert("error");
    </script>
    <?php
  }


 }

?>

</body>
</html>