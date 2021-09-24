<?php
include("config.php");

$Fest_name=$_POST['Fest_name'];
$Fest_college=$_POST['Fest_college'];
$eDate=$_POST['edate'];
$Department=$_POST['Department'];
$place=$_POST['Place'];
$Email=$_POST['Email'];
$GSM=$_POST['GSM'];
$About_fest=$_POST['About_fest'];
$Fest_type=$_POST['Fest_type'];
$sql = "INSERT INTO event( fest_name,fest_college,date,department,place,email,GSM,about_fest ,Fest_type )
VALUES ('$Fest_name','$Fest_college' ,'$eDate','$Department','$place','$Email',$GSM ,'$About_fest','$Fest_type')";

if ($db->query($sql) == TRUE) 
{
    header("Location: index.php");
} else 
{
	
   //header("Location: login.php");
   echo $sql;
}
?>