<html>
<head>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
<?php
include("config.php");
$q=mysqli_query($db,"select * from event ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function Deleteevent(fest_name)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_event.php?fest_name="+fest_name;
		}
	}
	function editevent(fest_name)
	{
		
		window.location.href="update_event.php?fest_name="+fest_name;
		
	}
</script>
<h2 style="color:#00FFCC" align="center">All Event</h2>
<table class="table table-sm">
  <thead class="thead-dark">
	<Tr >
		
		<th scope="col" >fest_name</th>
		<th scope="col" >fest_college</th>
		<th scope="col" >date</th>
		<th scope="col" >department</th>
		<th scope="col">place</th>
		<th scope="col" >email</th>
		<th scope="col">GSM</th>
		<th scope="col">about_fest</th>
		<th scope="col" >Fest_type</th>
		<th scope="col">link</th>
<th scope="col">Delete</th>
<th scope="col">Update</th>	
		
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr bgcolor=lightcyan>";

echo "<td>".$row['fest_name']."</td>";
echo "<td>".$row['fest_college']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['place']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['GSM']."</td>";
echo "<td>".$row['about_fest']."</td>";
echo "<td>".$row['Fest_type']."</td>";
echo "<td>".$row['link']."</td>";
?>

<Td><a href="javascript:Deleteevent('<?php echo $row['fest_name']; ?>')" style='color:Red'>
<span class='glyphicon glyphicon-trash'></span></a></td>
<Td><a href="javascript:editevent('<?php echo $row['fest_name']; ?>')" style='color:green'>
<span class='glyphicon glyphicon-edit'></span></a></td><?php


 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>