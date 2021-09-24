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

<body>
<div>  <a href="search.php" ><img data-u="image" src="images/banner.jpg" alt="banner" width="1920px" height="250px"/></a> </div>

<br><br><br><table class="table table-sm">
  <thead class="thead-dark">



	 <tr>
		<th scope="col" >fest_name</th>
	    <th scope="col" >fest_college</th>
		<th scope="col" >date</th>
		<th scope="col" >department</th>
		<th scope="col" >place</th>
		<th scope="col" >email</th>
		<th scope="col" >GSM</th>
		<th scope="col" >about_fest</th>
		<th scope="col" >Fest_type</th
		
	    </tr >
		 
		 
<?php
include("config.php");
 session_start();
 $txtDate=$_POST['txtDate'];
 //echo $txtDate;
  //$mydate = mysqli_real_escape_string($db,$_POST['txtDate']);
  //$edate= date('yyyy-mm-dd' ,str_replace('-' , '/', $date));
   
$sql = "SELECT * FROM event where date='$txtDate'";
//echo  $sql;
      $result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	        
			
		 
		   while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))  
	     {
    echo "<tr> <td>". $row['fest_name'] ."</td><td> ".$row["fest_college"]."</td><td> ".$row["date"] ."</td><td>  " .$row["department"] ."</td><td>  " .$row["place"]."</td><td>  " .$row["email"] ."</td><td>  " .$row['GSM'] ."</td><td>  " .$row["about_fest"] ."</td><td>  "  .$row["Fest_type"] ."</td></tr>" ;
		 }
		 
if(mysqli_num_rows($result)==0)
{
	echo "no data to be retrived";
}
		
	?>
	
	</table>
	</body>
	
    </html>
	