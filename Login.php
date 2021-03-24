<?php session_start(); ?>
<?php 
include "admin/db.php";
$msg = "";
if(isset($_POST["submit"])){
  
  
  $username =  $_POST["uname"];
  $password =  $_POST["psw"];

  $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($con, $query);

   if(mysqli_num_rows($result) !== 0){

    while($row = mysqli_fetch_array($result)) {

    $db_username = $row['username'];
    $db_password = $row['password'];
    $f_name = $row['first_name'];
    $l_name = $row['last_name'];

    }
    
    $_SESSION['username'] = $db_username;
    $_SESSION['fname'] = $f_name;
    $_SESSION['lname'] = $l_name;

    header("Location: admin/index.php");

   }else{
     $msg = "Userename or Password is Not Correcet ";
   }

}

  

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="sss.css">

</head>
<body>

<!--this for homebar-->
<div id="Homebar">
 <ul>
 <li><a href="index.php" class="c1">Home</a></li>
   <li><a href="Login.php" class="c1">Login</a></li>
    <li><a href="singup.php" class="c1">Sing up</a></li>
  	<li><a href="TopOfTVSeries.php" class="c1">Top OF TV Series</a></li>
   <li><a href="ContactUs.php" class="c1">Contact Us</a></li>
 </ul> 
</div><br>



 <form style="border:1px solid #ccc; background: MediumSeaGreen;" action="" method="POST" >  

  <div class="container">
    <h1 style="color: red"><?php echo $msg; ?></h1>
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
      <!-- <input type="checkbox" checked="checked" name="remember"> Remember me<br> -->

    <button type="submit" name="submit">Login</button>
    
  
  </div>
</form>

<!--this for soicalmedia-->

<div id="soicalmedia">
 <ul>
 	<li><i class="fa fa-facebook-official"></i> @rayan-sport</li>
	<li><i class="fa fa-youtube"></i> @rayan-sport</li>
	<li><i class="fa fa-instagram"></i> @rayan-sport</li>
	<li><i class="fa fa-twitter"></i> @rayan-sport</li>
 </ul>
</div>
</body>
</html>



</body>
</html>