<?php
include "admin/db.php";
if(!isset($_GET["id"]) || empty($_GET["id"])){
    header("Location: index.php");
}

$id = $_GET["id"];
?>

<?php

$query = "SELECT * From post Where id = $id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $row["name"] ?></title>
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
<!-- Tab body -->

<div id="discb">
	  <h1 style="text-align: center; color: #fff"><?php echo $row["name"] ?></h1>
	 <center> <img src="image/<?php echo $row["poster"] ?>"></center>
		<p><?php echo $row["description"] ?>
<br><br>
Creator: <?php echo $row["creator"] ?> <br><br>
Stars: <?php echo $row["stars"] ?><br>
		</p>
		<iframe width="560" height="315" src="<?php echo $row["video_link"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>




<!--this for soicalmedia-->
<div id="soicalmedia">
 <ul>
 	<li><i class="fa fa-facebook-official"></i> @series-sport</li>
	<li><i class="fa fa-youtube"></i> @series-sport</li>
	<li><i class="fa fa-instagram"></i> @series-sport</li>
	<li><i class="fa fa-twitter"></i> @series-sport</li>
 </ul>
</div>
</body>
</html>



</body>
</html>