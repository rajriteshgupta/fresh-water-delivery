
<!DOCTYPE html>

<html>



<head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>

       drinking water supplies

</title>

<style type="text/css">
      input{
           border-width: 2px;
           border-style: outset;
    
}


</style>
         <link rel="stylesheet" href="../css/index.css">

         <link rel="stylesheet" href="../css/registrationformstyle.css">
</head>

<body>
 <div id="wraper">
   
   
   
   
      <div class="header">
         <img src="../weblogo.png" >
        <h1>  fresh water supply home delivery </h1>
  
          <marquee> <b>life start with water   &nbsp    &nbsp   &nbsp  &nbsp! Save Water Save Your Life  </b></marquee>
       </div>  

         <div class="navbar">
             <ul>
                      
                      <li><a href="../watersuplies.html">Home </a></li>
                      <li><a href="../admin/complain.php" >Complain </a></li>
                      <li><a href="order.php">Order</a> </li>
                       <li><a href="" >Delivery details</a></li>
                   </div>
             </ul>
      </div>
                 <marquee style="color:#27AE60; font-size:20px; margin-top:5px;"> <b>! First consuumer please fill the register form first before login</b> </marquee>


<!--********* header ********************-->
 


     

 <div class="rblock" style="background-color: white; opacity: 0.8;">
    <form   action="dashboard.php" method="POST" enctype="multipart/form-data">
      
      <h1 align="center">Login Here </h1><br><br>
     

        <label>User email id :</label> <br>
        <input type="text"  placeholder="Enter User email" name="uemail" required>  <br><br>

       <label>Password : </label><br>
       <input type="Password" name="password" placeholder="Enter Password"  required> <br><br>
       <h4 style="margin-left:600px;">forget password?<a href="  " >  Click here </a></h4>
      <input type="submit" name="submit"  value="Sign in" style="background-color: #3333ff;"> <br>
      <h4 style="margin-left:600px;">Not a member?<a href="registationform.php" >  Sign up </a></h4>
      <br>
       <br>
          
    </form>
</div>
<br>
       <br>


<!--********* footer********************-->

<?php
include("../footer.html");

?>

</body>

</html>