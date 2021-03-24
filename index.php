<?php include "admin/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
<!-- Tab content -->
<div id="list">
  <ul>
      <?php
      $query = "SELECT * FROM `post` ";
      $result = mysqli_query($con, $query); 
      while($row = mysqli_fetch_array($result)){?>
   <li><a href="ep.php?id=<?php echo $row["id"] ?>"><img src="image/<?php echo $row["poster"] ?>"></a></li>
      <?php } ?>
  </ul>
</div>




<!--this for soicalmedia-->

<div id="soicalmedia">
 <ul>
 	<li><i class="fa fa-facebook-official"></i>@series-sport</li>
	<li><i class="fa fa-youtube"></i> @series-sport</li>
	<li><i class="fa fa-instagram"></i> @series-sport</li>
	<li><i class="fa fa-twitter"></i>@series-sport</li>
 </ul>
</div>
</body>
</html>



</body>
</html>