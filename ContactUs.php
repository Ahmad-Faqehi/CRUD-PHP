<?php 

$msg = "";
include "admin/db.php";

if(isset($_POST["submit"])){

  $name = $con->real_escape_string($_POST["Name"]);
  $email = $con->real_escape_string($_POST["Email"]);
  $comment = $con->real_escape_string($_POST["textarea"]);

  $query = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($con, $query);

  if($result){
    $msg = "Your Message Send Seccessfuly, Thank You.";
  }else{
    $msg = "Error";
  }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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



 <form style="border:1px solid #ccc; background: MediumSeaGreen;" action="" method="POST">  
<div class="container">
 <h1 style="text-align: left;">CONTACT US</h1>
 <h2 style="color: #fff;"><?php echo $msg ?></h2>
  <input type="text" name="Name" placeholder="*Name" maxlength="20"><br><br>
  <input type="text" name="Email" placeholder="*Email" size="55" maxlength="20"><br><br>
  
  <br>
  <textarea name="textarea" cols="120" rows="20" placeholder="*Comment"></textarea><br>
      <!-- <button type="submit">submit</button> -->
      <input type="submit" value="submit" name="submit">
  <br><br><br>
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