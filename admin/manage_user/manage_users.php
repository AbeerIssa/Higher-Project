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
$q=mysqli_query($db,"select * from user ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteUser(Email)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?Email="+Email;
		}
	}
</script>
<h2 style="color:#00FFCC" align="center">All Users</h2>
<table class="table table-sm">
  <thead class="thead-dark">


	<Tr >
		
		<th scope="col" >Email</th>
		<th scope="col" >Password</th>
<th scope="col">Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr bgcolor=lightcyan>";

echo "<td>".$row['Email']."</td>";
echo "<td>".$row['Password']."</td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['Email']; ?>')" style='color:Red'>
<span class='glyphicon glyphicon-trash'></span></a></td><?php 

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>
   