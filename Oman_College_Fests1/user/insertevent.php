<?php
include("config.php");

$fest_name=$_POST['fest_name'];
$Select_your_college=$_POST['college'];
$email=$_POST['email'];
$Date=$_POST['edate'];
$department=$_POST['Department'];
$Place=$_POST['place'];
$GSM=$_POST['GSM'];
$About_fest=$_POST['About_fest'];
$sql = "INSERT INTO event(fest_name,fest_college,date,department,place,email,GSM,about_fest)VALUES ('$fest_name','$Select_your_college' ,'$Date','$department','$Place''$email',$GSM ,'$About_fest')";

if ($db->query($sql) == TRUE) 
{
    header("Location:index.php");
} else 
{
	($db->query($sql) == FALSE )
   header("Location:login.php");
}
?>