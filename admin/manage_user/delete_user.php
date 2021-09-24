<?php 
include("config.php");
$Email=$_GET['Email'];

$q=mysqli_query($db,"delete from user where Email='$Email'");

header('location:manage_users.php');

?>