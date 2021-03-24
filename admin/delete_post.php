<?php 
session_start();
include "db.php";
 if(!$_SESSION['username']){
    header("Location: ../login.php");
 }

 $id = $_GET["id"];

$query = "DELETE FROM `post` WHERE id = $id";
$result = mysqli_query($con, $query);

if($result){
    header("Location: post.php");
}
?>