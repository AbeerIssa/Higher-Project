<?php 
include("config.php");
$fest_name=$_GET['fest_name'];

$q=mysqli_query($db,"delete from event where fest_name='$fest_name'");

header('location:manage_event.php');

?>