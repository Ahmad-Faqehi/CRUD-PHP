<?php 
$msg = "";
include "admin/db.php";
if(isset($_POST["submit"])){

  $username = $_POST["uname"];
  $email = $_POST["email"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $password = $_POST["psw"];
  $re_password = $_POST["psw-repeat"];

  if($password !== $re_password){

    $msg = "Password is Not Same !!";

  }else{

    $query = "INSERT INTO `users`(`username`, `password`, `email`, `first_name`, `last_name`) VALUES ('$username', '$password', '$email', '$fname', '$lname')";
    $result = mysqli_query($con, $query);

    if($result){
      session_start();
      $_SESSION['username'] = $username;

      header("Location: admin/index.php");

    }else{
      $msg ="Erorr";
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sing up</title>
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


<form  style="border:1px solid #ccc; background: MediumSeaGreen;" action="" method="POST">
  <div class="container">
    <h1 style="text-align: left;">Sign Up</h1>
    <p>Please fill in this form to create an account.</p><br>
    <hr>
    <h1 style="color: red"><?php echo $msg ?></h1>
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter UserName" name="uname" required><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="email"><b>First Name</b></label><br>
    <input type="text" placeholder="Enter First Name" name="fname" required><br>

    <label for="email"><b>Last Name</b></label><br>
    <input type="text" placeholder="Enter Last Name" name="lname" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
    
  <input type="submit" name="submit" value="Sign Up"><br>
      

  </div>
</form>

<!--this for soicalmedia-->

<div id="soicalmedia">
 <ul>
 	<li><i class="fa fa-facebook-official"></i> @rayan-sport</li>
	<li><i class="fa fa-youtube"></i>@rayan-sport</li>
	<li><i class="fa fa-instagram"></i>@rayan-sport</li>
	<li><i class="fa fa-twitter"></i> @rayan-sport</li>
 </ul>
</div>
</body>
</html>



</body>
</html>