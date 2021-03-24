<?php 
session_start();
include "db.php";
 if(!$_SESSION['username']){
    header("Location: ../login.php");
 }

 $id = $_GET["id"];

$query = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($con, $query);

if($result){
    header("Location: user.php");
}
?>